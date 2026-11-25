<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethods\Post;

/**
 * param
 *
 * If this is a `sepa_debit` PaymentMethod, this hash contains details about the SEPA debit bank account.
 */
final class SepaDebitRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'iban',
    ];

    protected const array VALIDATION = [
        'iban' => [
            'maxLength' => 5000,
        ],
    ];

    public string $iban {
        set {
            $this->assigning('iban', $value);
            $this->iban = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'iban' => is_string($value) ? $this->iban = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
