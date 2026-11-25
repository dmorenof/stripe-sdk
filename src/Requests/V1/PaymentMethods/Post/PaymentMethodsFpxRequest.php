<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethods\Post;

/**
 * param
 *
 * If this is an `fpx` PaymentMethod, this hash contains details about the FPX payment method.
 */
final class PaymentMethodsFpxRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bank',
    ];

    protected const array VALIDATION = [
        'bank' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\V1\PaymentMethods\Post\Fpx\FpxBankEnum $bank {
        set {
            $this->assigning('bank', $value);
            $this->bank = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank' => is_string($value) ? $this->bank = \StripeSDK\Enums\V1\PaymentMethods\Post\Fpx\FpxBankEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
