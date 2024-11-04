<?php

namespace Creational\Prototype;

abstract class BookPrototype
{
    protected string $title;
    protected string $subject;
    protected string $cardholderName;

    abstract public function __clone();

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): BookPrototype
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): BookPrototype
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardholderName(): string
    {
        return $this->cardholderName;
    }

    public function setCardholderName(string $cardholderName): BookPrototype
    {
        $this->cardholderName = $cardholderName;
        return $this;
    }
}
