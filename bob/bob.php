<?php

class Bob 
{
	function respondTo($talk)
	{
		$trimTalk = trim($talk);
		if (strlen($trimTalk) == 0) {
			return 'Fine. Be that way!';
		} elseif (preg_match("/[A-Z]/i", $trimTalk) AND mb_strtoupper($trimTalk) == $trimTalk) {
			return 'Whoa, chill out!';
		} elseif ($trimTalk[strlen($trimTalk) - 1] == '?') {
			return 'Sure.';
		} elseif (preg_match("/[A-Za-z0-9]/i", $trimTalk) == false) {
			return 'Fine. Be that way!';
		} else {
			return 'Whatever.';
		}
	}
}