<?php

$vapor->register('tolower', function($str) {
    return strtolower($str);
});
$vapor->register('toupper', function($str) {
    return strtoupper($str);
});
$vapor->register('ucwords', function($str) {
    return ucwords($str);
});
$vapor->register('email', function($str) {
    return sprintf("<a href=\"mailto: %s\">%s</a>", $str, $str);
});
$vapor->register('url', function($str, $text = NULL) {
    if ($text) {
        return sprintf("<a href=\"%s\">%s</a>", $str, $text);
    } else {
        return sprintf("<a href=\"%s\">%s</a>", $str, $str);
    }
});
