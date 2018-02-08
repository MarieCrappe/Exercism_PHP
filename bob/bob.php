<?php

class Bob 
{
	private $bob;

	function respondTo($talk)
	{
		if (preg_match("/[A-Za-z]/i", $talk) AND strtoupper($talk) == $talk) {
			return 'Whoa, chill out!';
		} elseif (strlen(trim($talk)) == 0) {
			return 'Fine. Be that way!';
		} elseif ($talk[strlen($talk) - 1] == '?') {
			return 'Sure.';
		} else {
			return 'Whatever.';
		}
	}
}