<?php

function from($date)
{
	$dateCopy = clone $date;
	return $dateCopy->add(new DateInterval('PT1000000000S'));
}