<?php
use DominionEnterprises\Util;
use DominionEnterprises\Util\Arrays;
use DominionEnterprises\Util\Http;

class BooksCollection implements IBooksCollection
{
    /**
     * @var array data returned by the book api
     */
    private $_data = [];

    /**
     * @var array url params to pass off to the book api
     */
    private $_param = [];

    /**
     * @var string
     */
    private $_sort = '';

    /**
     * @var int position of iterator on $_data array
     */
    private $_position = 0;

    public function find()
    {
        $this->_param = [];
        $this->_data = [];
        $this->_sort = '';

        return $this;
    }

    public function where(array $where)
    {
        $this->_param = $where;

        return $this;
    }

    public function sort($field)
    {
        $this->_sort = $field;

        $this->_data = $this->_callApi($this->_param, $this->_sort);

        return $this;
    }

    public function rewind()
    {
        $this->_position = 0;
    }

    public function current()
    {
        return new Book($this->_data[$this->_position]);
    }

    public function key()
    {
        return $this->_position;
    }

    public function next()
    {
        ++$this->_position;
    }

    public function valid()
    {
        return array_key_exists($this->_position, $this->_data);
    }

    public function count()
    {
        return count($this->_data);
    }

    /**
     * Returns array of books based on parameter and sort
     *
     * @see /src/Book.php
     *
     * @param array $param parameter to pass to book api
     * @param string $sort sort value of title, genre, or price
     * @return array of Book
     */
    private function _callApi(array $param = [], $sort = '')
    {
        Util::throwIfNotType(['string' => [$sort]], true);

        Util::ensure(true, in_array($sort, ['title', 'genre', 'price']));

        $apiParam = ['sort' => $sort];
        Arrays::copyIfKeysExist($param, $apiParam, ['genre', 'offset', 'limit']);

        $ret = [];
        do {
            $request = json_decode(file_get_contents('http://chadicus.herokuapp.com/books?' . Http::buildQueryString($apiParam)), true);

            if (!isset($request['total'])) {
                $request['total'] = 0;
                continue;
            }

            foreach ($request['books'] as $book) {
                $ret[] = $this->_getBookInfo($book['url']);
            }
        } while ($request['total'] != count($ret));

        return $ret;
    }

    private function _getBookInfo($urlPath)
    {
        Util::throwIfNotType(['string' => [$urlPath]]);

        return json_decode(file_get_contents("http://chadicus.herokuapp.com{$urlPath}"), true);
    }
}
