<?php

//  return 10 words from text
function tenWords($text) 
{
	$text = explode(' ', $text, 11 );
	unset($text[10]);
   	return implode(' ', $text);
}
