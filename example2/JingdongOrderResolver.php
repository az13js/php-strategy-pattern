<?php
/**
 * Jingdong 订单具体处理逻辑
 */
class JingdongOrderResolver implements OrderResolverInterface
{
    public function createOrder(array $orderInfo): bool
    {
        // do something...
        echo 'JingdongOrderResolver is working...' . PHP_EOL;
        // Jingdong 不需要特殊处理或者需要修改数据等，放这里
        return true;
    }
}
