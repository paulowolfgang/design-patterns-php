<?php

require_once('../../autoloader.php');

$strategyRar = new Behavioral\Strategy\CompressRar();
$strategyTar = new Behavioral\Strategy\CompressTar();
$strategyZip = new Behavioral\Strategy\CompressZip();

$compressionContext = new Behavioral\Strategy\CompressionContext($strategyRar);
$compressionContext->compress('/PATH/FILE');
echo "</br>";

$compressionContext = new Behavioral\Strategy\CompressionContext($strategyTar);
$compressionContext->compress('/PATH/FILE');
echo "</br>";

$compressionContext = new Behavioral\Strategy\CompressionContext($strategyZip);
$compressionContext->compress('/PATH/FILE');
echo "</br>";
