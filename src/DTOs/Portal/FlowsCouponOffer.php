<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalFlowsCouponOffer
 */
final class FlowsCouponOffer extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'coupon',
    ];

    protected const array VALIDATION = [
        'coupon' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The ID of the coupon to be offered.
     */
    public string $coupon {
        set {
            $this->assigning('coupon', $value);
            $this->coupon = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'coupon' => is_string($value) ? $this->coupon = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
