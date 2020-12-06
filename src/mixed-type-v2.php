<?php

class A
{
    // no type is specified, mixed type is assumed
    public function foo($value) {}
}

class B extends A
{
    // mixed type is explicitly specified, and is invariant to
    // type in parent class
    public function foo(mixed $value) {}
}
