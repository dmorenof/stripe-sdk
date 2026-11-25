<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceCardPaymentMethodOptions
 */
final class LinksResourceCardPaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Restrictions to apply to the card payment method. For example, you can block specific card brands.
     */
    public ?\StripeSDK\DTOs\Payment\LinksResourceCardRestrictions $restrictions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'restrictions' => $value === null || $value instanceof \stdClass ? $this->restrictions = $value === null ? null : new \StripeSDK\DTOs\Payment\LinksResourceCardRestrictions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
