#!/usr/bin/env bash

TESTS_PATH=`dirname $0`
cd ${TESTS_PATH}

../vendor/bin/codecept run unit --coverage-xml ../build/logs/clover.xml