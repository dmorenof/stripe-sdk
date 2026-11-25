<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * invoice_payment_method_options_billie
 */
final class PaymentMethodOptionsBillie extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'reference' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Invoice\PaymentMethodOptionsBillieCompanyDetails $company_details;
    /**
     * An identifier or reference that this payment corresponds to.
     */
    public ?string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'company_details' => $value instanceof \stdClass ? $this->company_details = new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsBillieCompanyDetails($value) : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
