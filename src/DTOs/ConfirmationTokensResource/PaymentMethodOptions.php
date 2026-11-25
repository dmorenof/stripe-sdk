<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ConfirmationTokensResource;

/**
 * Payment Method Option
 *
 * Payment-method-specific configuration
 */
final class PaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * This hash contains the card payment method options.
     */
    public ?\StripeSDK\DTOs\ConfirmationTokensResource\PaymentMethodOptionsResourceCard $card;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card' => $value === null || $value instanceof \stdClass ? $this->card = $value === null ? null : new \StripeSDK\DTOs\ConfirmationTokensResource\PaymentMethodOptionsResourceCard($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
