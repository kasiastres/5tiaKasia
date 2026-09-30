<?php
$foo = 'bob';     //przypisanie wartości "bob" do $foo
$bar = &$foo;     //referencja $foo przez $bar i vice versa
$bar='andy';
echo $bar;
echo $foo;        // $foo is altered too
?>