<?php

namespace Coupon\Tests\Entities;

use Coupon\Entities\Coupon;
use PHPUnit\Framework\TestCase;

class CouponTest extends TestCase
{
    public function testCreateCouponSuccess()
    {
        $code = 'TESTCODE';
        $discountAmount = '1000';
        $points = '100';
        $maxUsage = 10;
        $usedCount = 0;
        $createdAt = date('Y-m-d');
        $expiresAt = date('Y-m-d', strtotime('+1 month'));

        $coupon = new Coupon(
            $code,
            $discountAmount,
            $points,
            $maxUsage,
            $usedCount,
            $createdAt,
            $expiresAt
        );

        // Assert
        $this->assertEquals($code, $coupon->getCode());
        $this->assertEquals($discountAmount, $coupon->getDiscountAmount());
        $this->assertEquals($points, $coupon->getPoints());
        $this->assertEquals($maxUsage, $coupon->getMaxUsage());
        $this->assertEquals($usedCount, $coupon->getUsedCount());
        $this->assertEquals($createdAt, $coupon->getCreatedAt());
        $this->assertEquals($expiresAt, $coupon->getExpiresAt());
    }

    public function testCreateCouponFailed()
    {
        $this->expectException(\TypeError::class);
        $coupon = new Coupon(
            null,
            null,
            null,
            null,
            null,
            null,
            null
        );

        // Assert
        $this->assertNull($coupon);
        $this->assertNull($coupon->getCode());
        $this->assertNull($coupon->getDiscountAmount());
        // ... and so on
    }
}