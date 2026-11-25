<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_payment_record_boleto
 */
final class MethodDetailsPaymentRecordBoleto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'tax_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The tax ID of the customer (CPF for individuals consumers or CNPJ for businesses consumers)
     */
    public ?string $tax_id {
        set {
            $this->assigning('tax_id', $value);
            $this->tax_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'tax_id' => $value === null || is_string($value) ? $this->tax_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
