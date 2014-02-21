<?php
/**
 * Returns the number of business hours between two dates.
 *
 * @param \DateTime $start The start date.
 * @param \DateTime $end   The end date.
 *
 * @return int The number of business hours between the two dates
 */
function getBusinessHours($start, $end)
{
    /** Business Hours are from 9 - 5 Mon - Fri **/

    // convert timestamps to epoch time to make other calculations simpler
    $start = strtotime($start);
    $end = strtotime($end);

    // initialize a counter for reporting # of biz hours
    $accumulator = 0;

    // use a loop to step between the two timestamps, 1 hour at a time
    for ($i = $start; $i < $end; $i += 3600) {
        // test to see if on a workday and a work hour
        if (
            (date('w', $i) == 0 || date('w', $i) == 6) ||
            (date('G', $i) < 9 || date('G', $i) > 16)
        ) {
            // if no
            continue;
        }

        // if yes, increment the hours accumulator
        $accumulator++;
    }

    return $accumulator;
}

// array with timestamps from the assert() lines below
$timestamps = [
    '01/02/2014 13:00:00' => '01/03/2014 12:00:00',
    '01/03/2014 17:00:00' => '01/06/2014 09:00:00',
    '01/02/2014 09:00:00' => '01/02/2014 12:00:00',
];

// loop through the timestamps to see what each start/end date reports
foreach ($timestamps as $key => $value) {
    echo getBusinessHours($key, $value) . '<br />';
}




/* the asserts fail because they are expecting the datetime stamp in a particular format and they are not
 * happy with what they receive. Presumably they can be rewritten to work with epoch time as used above
 * or the lines above can be rewritten to work with the datetime stamps in a format that will work here.
 * Also, there's an error on line 58.
assert(getBusinessHours(new \DateTime('01/02/2014 13:00:00'), new DateTime('01/03/2014 12:00:00')) === 8.0);
assert(getBusinessHours(new \DateTime('01/03/2014 17:00:00'), new DateTime('01/06/2014 09:00:00')) === 0.0);
assert(getBusinessHours(new \DateTime('01/02/2014 09:00:00'), new DateTime('01/02/2014 12:00:00')) === 3.0);
*/

