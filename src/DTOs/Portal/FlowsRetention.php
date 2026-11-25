<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalFlowsRetention
 */
final class FlowsRetention extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * Configuration when `retention.type=coupon_offer`.
     */
    public ?\StripeSDK\DTOs\Portal\FlowsCouponOffer $coupon_offer;
    /**
     * Type of retention strategy that will be used.
     */
    public \StripeSDK\Enums\Portal\FlowsRetention\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'coupon_offer' => $value === null || $value instanceof \stdClass ? $this->coupon_offer = $value === null ? null : new \StripeSDK\DTOs\Portal\FlowsCouponOffer($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Portal\FlowsRetention\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
