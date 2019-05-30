<?php
/**
 * 在 Controller 调用和具体的订单处理逻辑之间的中间层？一个实例对应封装一种订单处理策略。
 */
class OrderCreateProblemResolver
{
    private $orderResolver;

    /**
     * 显然，里面包含的订单策略对象是外部提供的，这是个容器？构造方法是外部对象注入入口？
     */
    public function __construct(OrderResolverInterface $orderResolver)
    {
        $this->orderResolver = $orderResolver;
    }

    public function createOrder(array $orderInfo): bool
    {
        return $this->orderResolver->createOrder($orderInfo);
    }
}
