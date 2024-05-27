<?php

namespace Coupon\Services;

use Coupon\DTOs\CouponDTO;
use Coupon\UseCases\CreateCoupon;
use Coupon\UseCases\GetAllCoupon;
use Coupon\UseCases\RedeemCoupon;

class CouponService {
    private CreateCoupon $createCoupon;
    private RedeemCoupon $redeemCoupon;
    private GetAllCoupon $getAllCoupon;

    public function __construct(
        CreateCoupon $createCoupon,
        RedeemCoupon $redeemCoupon,
        GetAllCoupon $getAllCoupon
    ) {
        $this->createCoupon = $createCoupon;
        $this->redeemCoupon = $redeemCoupon;
        $this->getAllCoupon = $getAllCoupon;
    }

    public function createCoupon(CouponDTO $couponDTO)
    {
        return $this->createCoupon->execute($couponDTO);
    }

    public function redeemCoupon(string $code, int $userId)
    {
        return $this->redeemCoupon->execute($code, $userId);
    }

    public function getAllCoupon()
    {
        return $this->getAllCoupon->execute();
    }
}
