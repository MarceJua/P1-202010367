<?php

namespace App;

class ReturnException extends \Exception
{
    public $value;

    public function __construct($value)
    {
        parent::__construct("Return");
        $this->value = $value;
    }
}
