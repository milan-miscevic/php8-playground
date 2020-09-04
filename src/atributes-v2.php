<?php

#[Attribute]
class ListensTo
{
    public function __construct(mixed $x)
    {
        //
    }
}

class ProductListener
{
    #[ListensTo(ProductCreated::class)]
    public function onProductCreated(ProductCreated $event)
    {
        //
    }

    #[ListensTo(ProductDeleted::class)]
    public function onProductDeleted(ProductDeleted $event)
    {
        //
    }
}

$reflectionMethod = new ReflectionMethod(ProductListener::class, 'onProductCreated');
$attributes = $reflectionMethod->getAttributes();

var_dump($attributes[0]->getName());
echo '<br>';
var_dump($attributes[0]->getTarget());
echo '<br>';
var_dump($attributes[0]->isRepeated());
echo '<br>';
var_dump($attributes[0]->getArguments());
echo '<br>';
var_dump($attributes[0]->newInstance());