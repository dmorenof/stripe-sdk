<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData;

/**
 * param
 */
final class DataBoletoRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'tax_id',
    ];

    protected const array VALIDATION = [
        'tax_id' => [
            'maxLength' => 5000,
        ],
    ];

    public string $tax_id {
        set {
            $this->assigning('tax_id', $value);
            $this->tax_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'tax_id' => is_string($value) ? $this->tax_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
