<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * setup_intent_payment_method_options_mandate_options_sepa_debit
 */
final class IntentPaymentMethodOptionsMandateOptionsSepaDebit extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'reference_prefix' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Prefix used to generate the Mandate reference. Must be at most 12 characters long. Must consist of only uppercase letters, numbers, spaces, or the following special characters: '/', '_', '-', '&', '.'. Cannot begin with 'STRIPE'.
     */
    public string $reference_prefix {
        set {
            $this->assigning('reference_prefix', $value);
            $this->reference_prefix = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reference_prefix' => is_string($value) ? $this->reference_prefix = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
