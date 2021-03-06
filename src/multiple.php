<?php

// constructor-promotion
// named-params
// stringable

class User
{
    public function __construct(
        private string $firstName,
        private string $lastName,
        private string $email = 'n/a',
        private string $location = 'n/a',
    ) {}

    public function __toString(): string
    {
        return "Name: {$this->firstName} {$this->lastName}, email: {$this->email}, location: {$this->location}";
    }
}

$user = new User(
    'John',
    'Doe',
    location: 'New York',
);

echo $user;
echo '<br>';
echo 'Stringable: ' . (($user instanceof Stringable) ? '' : 'not') . 'implemented';
