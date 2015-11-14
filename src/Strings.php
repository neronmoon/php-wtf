<?php namespace WTF;

/**
 * Converts any to string and call strpos
 * @see strpos
 */
function strpos($haystack, $needle, $offset = 0)
{
    return \strpos((string)$haystack, (string)$needle, $offset);
}
