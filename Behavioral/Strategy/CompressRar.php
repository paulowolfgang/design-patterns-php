<?php

namespace Behavioral\Strategy;

class CompressRar extends CompressionStrategy
{
    public function compress(string $pathFile): bool
    {
        echo 'Arquivo comprimido no formato: ".RAR"';
        return true;
    }
}
