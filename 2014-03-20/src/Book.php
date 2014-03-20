<?php
class Book
{
    private $_data = [];

    public function __construct(array $data)
    {
        if (isset($data['publishDate'])) {
            $dateTime = new DateTime();
            $dateTime->setTimestamp($data['publishDate']);

            $data['publishDate'] = $dateTime;
        }

        $this->_data = $data;
    }

    public function __call($name, array $args)
    {
        $name = str_replace('get', '', $name);

        if (strlen($name) < 1) {
            return null;
        }

        $field = strtolower($name[0]) . substr($name, 1);

        if (!isset($this->_data[$field])) {
            return null;
        }

        return $this->_data[$field];
    }
}
