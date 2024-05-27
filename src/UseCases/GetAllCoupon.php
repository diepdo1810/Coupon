<?php
namespace Coupon\UseCases;

use Coupon\DTOs\CouponDTO;
use Coupon\Repositories\CouponRepositoryInterface;

class GetAllCoupon
{
    private CouponRepositoryInterface $couponRepository;

    public function __construct(CouponRepositoryInterface $couponRepository)
    {
        $this->couponRepository = $couponRepository;
    }

    public function execute(): array
    {
        return $this->couponRepository->getAll();
    }
}