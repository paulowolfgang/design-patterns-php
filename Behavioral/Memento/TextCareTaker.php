<?php

namespace Behavioral\Memento;

class TextCareTaker
{
    protected array $textStates = [];

    public function addMemento(TextMemento $textMemento): void
    {
        $this->textStates[] = $textMemento;
    }

    public function returnLastSavedState(): ?TextMemento
    {
        if (empty($this->textStates)) {
            return null;
        }

        $textMemento = end($this->textStates);
        unset($this->textStates[sizeof($this->textStates) - 1]);
        return $textMemento;
    }
}
