<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_payment_record_klarna
 */
final class MethodDetailsPaymentRecordKlarna extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'location' => [
            'maxLength' => 5000,
        ],
        'payment_method_category' => [
            'maxLength' => 5000,
        ],
        'preferred_locale' => [
            'maxLength' => 5000,
        ],
        'reader' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * ID of the [location](https://docs.stripe.com/api/terminal/locations) that this transaction's reader is assigned to.
     */
    public string $location {
        set {
            $this->assigning('location', $value);
            $this->location = $value;
        }
    }
    /**
     * The payer details for this transaction.
     */
    public ?\StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\KlarnaDetailsResourcePayerDetails $payer_details;
    /**
     * The Klarna payment method used for this transaction. Can be one of `pay_later`, `pay_now`, `pay_with_financing`, or `pay_in_installments`
     */
    public ?string $payment_method_category {
        set {
            $this->assigning('payment_method_category', $value);
            $this->payment_method_category = $value;
        }
    }
    /**
     * Preferred language of the Klarna authorization page that the customer is redirected to. Can be one of `de-AT`, `en-AT`, `nl-BE`, `fr-BE`, `en-BE`, `de-DE`, `en-DE`, `da-DK`, `en-DK`, `es-ES`, `en-ES`, `fi-FI`, `sv-FI`, `en-FI`, `en-GB`, `en-IE`, `it-IT`, `en-IT`, `nl-NL`, `en-NL`, `nb-NO`, `en-NO`, `sv-SE`, `en-SE`, `en-US`, `es-US`, `fr-FR`, `en-FR`, `cs-CZ`, `en-CZ`, `ro-RO`, `en-RO`, `el-GR`, `en-GR`, `en-AU`, `en-NZ`, `en-CA`, `fr-CA`, `pl-PL`, `en-PL`, `pt-PT`, `en-PT`, `de-CH`, `fr-CH`, `it-CH`, or `en-CH`
     */
    public ?string $preferred_locale {
        set {
            $this->assigning('preferred_locale', $value);
            $this->preferred_locale = $value;
        }
    }
    /**
     * ID of the [reader](https://docs.stripe.com/api/terminal/readers) this transaction was made on.
     */
    public string $reader {
        set {
            $this->assigning('reader', $value);
            $this->reader = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'location' => is_string($value) ? $this->location = $value : parent::assignMember($name, $value),
            'payer_details' => $value === null || $value instanceof \stdClass ? $this->payer_details = $value === null ? null : new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\KlarnaDetailsResourcePayerDetails($value) : parent::assignMember($name, $value),
            'payment_method_category' => $value === null || is_string($value) ? $this->payment_method_category = $value : parent::assignMember($name, $value),
            'preferred_locale' => $value === null || is_string($value) ? $this->preferred_locale = $value : parent::assignMember($name, $value),
            'reader' => is_string($value) ? $this->reader = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
