<?php

namespace Behavioral\Memento;

class Text
{
    protected string $text;
    protected TextCareTaker $textCareTaker;

    public function __construct()
    {
        $this->textCareTaker = new TextCareTaker();
        $this->text = '';
    }

    public function writeText(string $text): void
    {
        $this->textCareTaker->addMemento(new TextMemento($this->text));
        $this->text .= $text;
    }

    public function undoWriting(): void
    {
        $this->text = $this->textCareTaker->returnLastSavedState()->getText();
    }

    public function returnText(): string
    {
        return $this->text;
    }
}
