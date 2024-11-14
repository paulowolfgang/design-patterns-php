<?php

namespace Behavioral\Strategy;

class CompressZip extends CompressionStrategy
{
    public function compress(string $pathFile): bool
    {
        echo 'Arquivo comprimido no formato: ".ZIP"';
        return true;
    }
}
