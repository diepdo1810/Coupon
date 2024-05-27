<?php

namespace Coupon\UseCases;

use Coupon\DTOs\CouponDTO;
use Coupon\Entities\Coupon;
use Coupon\Repositories\UserCouponRepositoryInterface;

class CreateCoupon {
    private $couponRepository;

    public function __construct(UserCouponRepositoryInterface $couponRepository)
    {
        $this->couponRepository = $couponRepository;
    }

    public function execute(CouponDTO $couponDTO): Coupon
    {
        $coupon = new Coupon(
            $couponDTO->getCode(),
            $couponDTO->getDiscountAmount(),
            $couponDTO->getPoints(),
            $couponDTO->getMaxUsage(),
            $couponDTO->getUsedCount(),
            $couponDTO->getCreatedAt(),
            $couponDTO->getExpiresAt()
        );
        $this->couponRepository->save($coupon);

        return $coupon;
    }
}
