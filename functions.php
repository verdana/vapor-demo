<?php

$vapor->registerFunction('tolower', function($str) {
    return strtolower($str);
});

$vapor->registerFunction('toupper', function($str) {
    return strtoupper($str);
});

$vapor->registerFunction('ucwords', function($str) {
    return ucwords($str);
});

$vapor->registerFunction('email', function($str) {
    return sprintf("<a href=\"mailto: %s\">%s</a>", $str, $str);
});

$vapor->registerFunction('url', function($str, $text = NULL) {
    if ($text) {
        return sprintf("<a href=\"%s\">%s</a>", $str, $text);
    } else {
        return sprintf("<a href=\"%s\">%s</a>", $str, $str);
    }
});
