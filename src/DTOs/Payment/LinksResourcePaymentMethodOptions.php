<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourcePaymentMethodOptions
 */
final class LinksResourcePaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Configuration for `card` payment methods.
     */
    public ?\StripeSDK\DTOs\Payment\LinksResourceCardPaymentMethodOptions $card;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card' => $value === null || $value instanceof \stdClass ? $this->card = $value === null ? null : new \StripeSDK\DTOs\Payment\LinksResourceCardPaymentMethodOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
