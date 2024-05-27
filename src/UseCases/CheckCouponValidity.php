<?php

namespace Coupon\UseCases;

use Coupon\DTOs\CouponDTO;
use Coupon\Repositories\UserCouponRepositoryInterface;
use DateTime;

class CheckCouponValidity
{
    private $couponRepository;

    public function __construct(UserCouponRepositoryInterface $couponRepository)
    {
        $this->couponRepository = $couponRepository;
    }

    /**
     * @throws CouponLimitReachedException
     */
    public function execute(CouponDTO $couponDTO)
    {
        $coupon = $this->couponRepository->findByCode($couponDTO->getCode());
        if ($coupon->getUsedCount() >= $coupon->getMaxUsage()) {
            throw new CouponLimitReachedException();
        }
        if ($coupon->getExpiresAt() < new DateTime()) {
            throw new CouponExpiredException();
        }
    }
}