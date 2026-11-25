<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Sessions\Post\FlowData\SubscriptionCancel;

/**
 * retention_param
 */
final class CancelRetentionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'coupon_offer',
        'type',
    ];

    public \StripeSDK\Requests\V1\BillingPortal\Sessions\Post\FlowData\SubscriptionCancel\Retention\CouponOfferRequest $coupon_offer;
    public \StripeSDK\Enums\V1\BillingPortal\Sessions\Post\FlowData\SubscriptionCancel\Retention\RetentionTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\BillingPortal\Sessions\Post\FlowData\SubscriptionCancel\Retention\RetentionTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
