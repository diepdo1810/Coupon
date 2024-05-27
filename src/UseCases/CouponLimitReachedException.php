<?php

namespace Coupon\UseCases;

use ReturnTypeWillChange;

class CouponLimitReachedException extends \Exception
{
    public function __construct()
    {
        parent::__construct("Coupon limit reached");
    }
}