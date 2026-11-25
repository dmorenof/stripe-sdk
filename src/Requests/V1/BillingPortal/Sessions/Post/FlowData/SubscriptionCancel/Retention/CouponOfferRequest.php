<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Sessions\Post\FlowData\SubscriptionCancel\Retention;

/**
 * coupon_offer_param
 */
final class CouponOfferRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'coupon',
    ];

    protected const array VALIDATION = [
        'coupon' => [
            'maxLength' => 5000,
        ],
    ];

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
