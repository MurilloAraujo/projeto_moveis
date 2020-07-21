<?php

namespace Source\Lib;

class Address extends User
{
    public function __construct(int $id, string $name, string $mail)
    {
        parent::__construct($id, $name, $mail);
    }

    public function home()
    {
        return $this->getMail();
    }
}