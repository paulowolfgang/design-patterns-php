<?php

namespace Behavioral\Strategy;

class CompressTar extends CompressionStrategy
{
    public function compress(string $pathFile): bool
    {
        echo 'Arquivo comprimido no formato: ".TAR"';
        return true;
    }
}
