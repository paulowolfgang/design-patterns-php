<?php

require_once('../../autoloader.php');

$text = new \Behavioral\Memento\Text();

$text->writeText('A');
$text->writeText('B');
$text->writeText('C');

echo $text->returnText();
echo "</br>";

$text->undoWriting();
echo $text->returnText();
