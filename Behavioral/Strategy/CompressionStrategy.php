<?php

namespace Behavioral\Strategy;

abstract class CompressionStrategy
{
    public function renameFileInOrder(): void
    {
        echo 'Arquivos renomeados!';
    }

    abstract public function compress(string $filePath): bool;
}
