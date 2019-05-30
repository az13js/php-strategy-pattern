<?php
/**
 * 所有订单处理都必须实现的接口
 */
interface OrderResolverInterface
{
    public function createOrder(array $orderInfo): bool;
}
