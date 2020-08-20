<?php

function f(string $mandatory, string $optional1 = 'optional1', string $optional2 = 'optional2')
{
    echo "{$mandatory} {$optional1} {$optional2}";
}

f('my-mandatory', optional2: 'my-optional');
