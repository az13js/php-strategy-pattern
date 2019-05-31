<?php
/**
 * Taobao 订单具体处理逻辑
 */
class TaobaoOrderResolver implements OrderResolverInterface
{
    public function createOrder(array $orderInfo): bool
    {
        // do something...
        echo 'TaobaoOrderResolver is working...' . PHP_EOL;
        // Taobao 需要专门处理XXXXX等等，都放这里来处理
        return true;
    }
}
