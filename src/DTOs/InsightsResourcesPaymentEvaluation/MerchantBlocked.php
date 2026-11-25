<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * Merchant Blocked
 *
 * Details of a merchant_blocked outcome attached to this payment evaluation.
 */
final class MerchantBlocked extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'reason',
    ];

    /**
     * The reason the payment was blocked by the merchant.
     */
    public \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\MerchantBlocked\ReasonEnum $reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reason' => is_string($value) ? $this->reason = \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\MerchantBlocked\ReasonEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
