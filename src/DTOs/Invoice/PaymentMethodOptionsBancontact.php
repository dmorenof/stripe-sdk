<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * invoice_payment_method_options_bancontact
 */
final class PaymentMethodOptionsBancontact extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'preferred_language',
    ];

    /**
     * Preferred language of the Bancontact authorization page that the customer is redirected to.
     */
    public \StripeSDK\Enums\Invoice\PaymentMethodOptionsBancontact\PreferredLanguageEnum $preferred_language;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'preferred_language' => is_string($value) ? $this->preferred_language = \StripeSDK\Enums\Invoice\PaymentMethodOptionsBancontact\PreferredLanguageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
