<?php

namespace SimpleFactory;

/**
 * 乘法
 * Class Add
 * @package SimpleFactory
 */
class Mul extends Operation
{
    /**
     * 计算结果
     * @return float|int
     */
    public function getResult()
    {
        return $this->numberA * $this->numberB;
    }
}