<?php

namespace Behavioral\Observer;

interface Observer
{
    public function updating(string $code): void;
}
