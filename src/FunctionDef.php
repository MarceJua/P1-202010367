<?php

namespace App;

class FunctionDef
{
    public $params;
    public $block;
    public $type;

    public function __construct($params, $block, $type)
    {
        $this->params = $params;
        $this->block = $block;
        $this->type = $type;
    }
}
