<?php
class Speaker
{
    private $realSpeaker;

    public function __construct(StrategyInterface $realSpeaker)
    {
        $this->realSpeaker = $realSpeaker;
    }

    public function say()
    {
        $this->realSpeaker->saySomething();
    }
}
