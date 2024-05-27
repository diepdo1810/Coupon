<?php

namespace Coupon\Repositories;

use Coupon\Entities\Coupon;

interface UserCouponRepositoryInterface
{
    public function save(Coupon $coupon): void;
    public function findByCode(string $code): Coupon;
    public function findAll(): array;
}