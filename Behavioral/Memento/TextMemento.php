<?php

namespace Behavioral\Memento;

class TextMemento
{
    protected $textStatus;

    public function __construct($textStatus)
    {
        $this->textStatus = $textStatus;
    }

    public function getText(): string
    {
        return $this->textStatus;
    }
}
