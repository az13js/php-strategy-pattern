<?php
/**
 * https://www.tutorialspoint.com/design_pattern/strategy_pattern.htm
 */
require_once 'autoload.php';

$speaker = new Speaker(new ChineseStrategy());
$speaker->say();

$speaker = new Speaker(new EnglishStrategy());
$speaker->say();
