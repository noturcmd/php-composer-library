<?php

namespace perl\belajar;

class Customer{

    public function __construct(private string $nama)
    {
    }

    public function sayHello(string $nama = "Guest"):string
    {
        return "Hello $nama, my name is $this->nama";
    }
}