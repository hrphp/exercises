<?php

date_default_timezone_set('America/New_York');

class MyDateTime
{

	public static function isWeekday(\DateTime $time)
	{
		$day = date('w', $time->getTimestamp());
		return (($day >= 1) && ($day <= 5));
	}

	public static function getWorkingHours(\DateTime $time)
	{
		$hour = date('G', $time->getTimestamp());

		if ($hour < 9 || $hour > 17) {
			return 0;
		}

		return ($hour - 9);
	}

}

function getBusinessHours(\DateTime $start, \DateTime $end)
{
	if (\MyDateTime::isWeekday($start)) {
		$startDayHours = \MyDateTime::getWorkingHours($start);
	}
	if (\MyDateTime::isWeekday($end)) {
		$endDayHours = \MyDateTime::getWorkingHours($end);
	}

	for ($i=$start->getTimestamp(); $i<$end->getTimestamp(); $i+=(3600*24)) {

	}

}


/**
 * Returns the number of business hours between two dates.
 *
 * @param \DateTime $start The start date.
 * @param \DateTime $end   The end date.
 *
 * @return float The number of business hours between the two dates
 */
function getBusinessHours2(\DateTime $start, \DateTime $end)
{
    /** Business Hours are from 9 - 5 Mon - Fri **/
	$startTimestamp = $start->getTimestamp();
	$endTimestamp = $end->getTimestamp();

	$j = 0;

	for($i=$startTimestamp; $i<$endTimestamp; $i+=3600) {
		$day = date('w', $i);
		if ($day == 0 || $day == 6) {
			continue;
		}
		$hour = date('G', $i);
		if ($hour >= 9 && $hour <= 17) {
			$j++;
		}
		if ($hour == 9) {

		}
	}

	return (float) $j;
}


/*
assert((new \MyDateTime(new \DateTime('01/16/2014 13:00:00')))->isWeekday() === true);
assert((new \MyDateTime(new \DateTime('01/16/2014 13:00:00')))->getWorkingHours() === 4);
assert((new \MyDateTime(new \DateTime('01/16/2014 07:00:00')))->getWorkingHours() === 0);
*/

assert(getBusinessHours(new \DateTime('01/02/2014 13:00:00'), new DateTime('01/03/2014 12:00:00')) === 8.0);
assert(getBusinessHours(new \DateTime('01/03/2014 17:00:00'), new DateTime('01/06/2014 09:00:00')) === 0);
assert(getBusinessHours(new \DateTime('01/02/2014 09:00:00'), new DateTime('01/02/2014 12:00:00')) === 3.0);