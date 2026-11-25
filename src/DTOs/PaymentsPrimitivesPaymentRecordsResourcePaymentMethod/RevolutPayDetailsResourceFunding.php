<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod;

/**
 * PaymentsPrimitivesPaymentRecordsResourcePaymentMethodRevolutPayDetailsResourceFunding
 */
final class RevolutPayDetailsResourceFunding extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\RevolutPayDetailsResourceFundingResourceFundingCard $card;
    /**
     * Funding type of the underlying payment method.
     */
    public ?\StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\RevolutPayDetailsResourceFunding\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\RevolutPayDetailsResourceFundingResourceFundingCard($value) : parent::assignMember($name, $value),
            'type' => $value === null || is_string($value) ? $this->type = $value === null ? null : \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\RevolutPayDetailsResourceFunding\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
