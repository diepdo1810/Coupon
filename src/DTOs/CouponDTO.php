<?php

namespace Coupon\DTOs;

class CouponDTO {
    private $code;
    private $discountAmount;
    private $points;
    private $maxUsage;
    private $usedCount;
    private $createdAt;
    private $expiresAt;

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

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function setDiscountAmount(string $discountAmount): void
    {
        $this->discountAmount = $discountAmount;
    }

    public function setPoints(string $points): void
    {
        $this->points = $points;
    }

    public function setMaxUsage(int $maxUsage): void
    {
        $this->maxUsage = $maxUsage;
    }

    public function setUsedCount(int $usedCount): void
    {
        $this->usedCount = $usedCount;
    }

    public function setExpiresAt($expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }

    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function toArray(): array
    {
        return [
            'code' => $this->code,
            'discountAmount' => $this->discountAmount,
            'points' => $this->points,
            'maxUsage' => $this->maxUsage,
            'usedCount' => $this->usedCount,
            'createdAt' => $this->createdAt,
            'expiresAt' => $this->expiresAt,
        ];
    }
}
