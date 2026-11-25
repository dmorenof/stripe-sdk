<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod;

/**
 * PaymentsPrimitivesPaymentRecordsResourcePaymentMethodAmazonPayDetailsResourceFunding
 */
final class AmazonPayDetailsResourceFunding extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\AmazonPayDetailsResourceFundingResourceFundingCard $card;
    /**
     * funding type of the underlying payment method.
     */
    public ?\StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\AmazonPayDetailsResourceFunding\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\AmazonPayDetailsResourceFundingResourceFundingCard($value) : parent::assignMember($name, $value),
            'type' => $value === null || is_string($value) ? $this->type = $value === null ? null : \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\AmazonPayDetailsResourceFunding\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
