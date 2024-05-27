<?php

namespace Coupon\UseCases;

use Coupon\Entities\Coupon;
use Coupon\Repositories\UserCouponRepositoryInterface;

class RedeemCoupon
{
    private $couponRepository;

    public function __construct(UserCouponRepositoryInterface $couponRepository)
    {
        $this->couponRepository = $couponRepository;
    }

    public function execute(string $code): Coupon
    {
        $coupon = $this->couponRepository->findByCode($code);
        $coupon->redeem();
        $this->couponRepository->save($coupon);

        return $coupon;
    }
}