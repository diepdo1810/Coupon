<?php

namespace Coupon\UseCases;

class CouponExpiredException extends \Exception
{

    public function __construct()
    {
        parent::__construct("Coupon expired");
    }
}