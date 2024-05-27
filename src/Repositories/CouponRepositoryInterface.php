<?php

namespace Coupon\Repositories;


use Coupon\Entities\Coupon;

interface CouponRepositoryInterface
{
    public function save(Coupon $coupon);
    public function findByCode(string $code): Coupon;
    public function getAll(): array;
    public function update(Coupon $coupon);
}
