<?php

class Bob 
{
	function respondTo($talk)
	{
		if (strlen(trim($talk)) == 0) {
			return 'Fine. Be that way!';
		} elseif (preg_match("/[A-Z]/i", $talk) AND strlen(preg_replace("/[^a-z]+/", "", $talk)) == 0) {
			return 'Whoa, chill out!';
		} elseif (trim($talk)[strlen(trim($talk)) - 1] == '?') {
			return 'Sure.';
		} elseif (preg_match("/[A-Za-z0-9]/i", $talk) == false) {
			return 'Fine. Be that way!';
		} else {
			return 'Whatever.';
		}
	}
}


// (strtoupper($talk) == $talk OR ctype_upper($talk))