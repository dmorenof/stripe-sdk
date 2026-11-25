<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * setup_intent_payment_method_options_klarna
 */
final class IntentPaymentMethodOptionsKlarna extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'preferred_locale' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The currency of the setup intent. Three letter ISO currency code.
     * Format: currency
     */
    public ?string $currency;
    /**
     * Preferred locale of the Klarna checkout page that the customer is redirected to.
     */
    public ?string $preferred_locale {
        set {
            $this->assigning('preferred_locale', $value);
            $this->preferred_locale = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => $value === null || is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'preferred_locale' => $value === null || is_string($value) ? $this->preferred_locale = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
