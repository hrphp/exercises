<?php
/**
 * Returns the number of business hours between two dates.
 *
 * @param \DateTime $start The start date.
 * @param \DateTime $end   The end date.
 *
 * @return float The number of business hours between the two dates
 */
function getBusinessHours(\DateTime $start, \DateTime $end)
{
    /** Business Hours are from 9 - 5 Mon - Fri **/

    // assign incoming parameters to handler variables in epoch time format
	// to make other calculations simpler
	$start = $start->getTimestamp();
	$end = $end->getTimestamp();

    // initialize an accumulator for reporting the # of biz hours
    $accumulator = 0;

    // use a loop to step between the two timestamp objects, 1 hour at a time
    for ($i = $start; $i < $end; $i += 3600) {
        // test to see if on a workday and a work hour
        if (
            (date('w', $i) == 0 || date('w', $i) == 6) ||
            (date('G', $i) < 9 || date('G', $i) > 16)
        ) {
			// if no, continue;
			continue;
        }
	        // if yes, increment the hours accumulator
	        $accumulator++;

    }

    return (float)$accumulator;
}

assert(getBusinessHours(new \DateTime('01/02/2014 13:00:00'), new DateTime('01/03/2014 12:00:00')) === 7.0);
assert(getBusinessHours(new \DateTime('01/03/2014 17:00:00'), new DateTime('01/06/2014 09:00:00')) === 0.0);
assert(getBusinessHours(new \DateTime('01/02/2014 09:00:00'), new DateTime('01/02/2014 12:00:00')) === 3.0);


