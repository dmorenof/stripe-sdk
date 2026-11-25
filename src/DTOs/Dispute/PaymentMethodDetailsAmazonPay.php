<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Dispute;

/**
 * DisputePaymentMethodDetailsAmazonPay
 */
final class PaymentMethodDetailsAmazonPay extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The AmazonPay dispute type, chargeback or claim
     */
    public ?\StripeSDK\Enums\Dispute\PaymentMethodDetailsAmazonPay\DisputeTypeEnum $dispute_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dispute_type' => $value === null || is_string($value) ? $this->dispute_type = $value === null ? null : \StripeSDK\Enums\Dispute\PaymentMethodDetailsAmazonPay\DisputeTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
