<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\PaymentMethodData;

/**
 * param
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
