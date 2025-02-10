<?php

namespace Pykam\RandomClient;

use Pykam\RandomClient\Request;


class RandomDigit
{
    public function get($id)
    {
        return (new Request('localhost:5000/get', ['id' => $id]))->get();
    }

    public function create()
    {
        return (new Request('localhost:5000/random'))->get();
    }
}