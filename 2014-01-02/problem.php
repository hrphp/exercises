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
}

assert(getBusinessHours(new \DateTime('01/02/2014 13:00:00'), new DateTime('01/03/2014 12:00:00')) === 7.0);
assert(getBusinessHours(new \DateTime('01/03/2014 17:00:00'), new DateTime('01/06/2014 09:00:00')) === 0.0);
assert(getBusinessHours(new \DateTime('01/02/2014 09:00:00'), new DateTime('01/02/2014 12:00:00')) === 3.0);
