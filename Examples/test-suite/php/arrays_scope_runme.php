<?php

require "tests.php";
require "arrays_scope.php";

// New functions
check::functions(array('new_bar','bar_blah'));
// New classes
check::classes(array('arrays_scope','Bar'));
// No new globals
check::globals(array());

$bar=new bar();

check::done();
