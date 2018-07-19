#!/bin/sh

export ZEND_DONT_UNLOAD_MODULES=1
export USE_ZEND_ALLOC=0

/usr/local/bin/php          \
    -S 192.168.0.50:80      \
    -d extension=vapor.so   \
    -d cli_server.color=on  \
    -d error_reporting=E_ALL

