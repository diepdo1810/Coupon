<?php

namespace Coupon\Entities;

use DateTime;

class Coupon
{
    private readonly string $code;
    private readonly string $discountAmount;
    private readonly string $points;
    private $maxUsage;
    private $usedCount;
    private $expiresAt;
    private $createdAt;

    public function __construct(
        string $code,
        string $discountAmount,
        string $points,
        int    $maxUsage,
        int    $usedCount,
               $createdAt,
               $expiresAt
    )
    {
        $this->code = $code;
        $this->discountAmount = $discountAmount;
        $this->points = $points;
        $this->maxUsage = $maxUsage;
        $this->usedCount = $usedCount;
        $this->createdAt = $createdAt;
        $this->expiresAt = $expiresAt;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getDiscountAmount(): string
    {
        return $this->discountAmount;
    }

    public function getPoints(): string
    {
        return $this->points;
    }

    public function getMaxUsage(): int
    {
        return $this->maxUsage;
    }

    public function getUsedCount(): int
    {
        return $this->usedCount;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    public function redeem()
    {
        $this->usedCount++;
    }

    public function isExpired(): bool
    {
        return $this->expiresAt < new DateTime();
    }

    public function isLimitReached(): bool
    {
        return $this->usedCount >= $this->maxUsage;
    }

    public function isValid(): bool
    {
        return !$this->isExpired() && !$this->isLimitReached();
    }
}