<?php
/**
 * https://www.tutorialspoint.com/design_pattern/strategy_pattern.htm
 */
require_once 'autoload.php';

// $resolver 由容器提供？工厂方法获得？
$resolver = new OrderCreateProblemResolver(new Resolvers\JingdongOrderResolver());

// Controller:
$result = $resolver->createOrder(['userName' => 'xiaoming', 'mobileNumber' => '110']);
echo 'Create result:' . PHP_EOL;
var_dump($result);
