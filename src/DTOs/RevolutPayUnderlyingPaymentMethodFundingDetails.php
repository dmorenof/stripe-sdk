<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * revolut_pay_underlying_payment_method_funding_details
 */
final class RevolutPayUnderlyingPaymentMethodFundingDetails extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Payment\MethodDetailsPassthroughCard $card;
    /**
     * funding type of the underlying payment method.
     */
    public ?\StripeSDK\Enums\RevolutPayUnderlyingPaymentMethodFundingDetails\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\Payment\MethodDetailsPassthroughCard($value) : parent::assignMember($name, $value),
            'type' => $value === null || is_string($value) ? $this->type = $value === null ? null : \StripeSDK\Enums\RevolutPayUnderlyingPaymentMethodFundingDetails\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
