<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethods\Post;

/**
 * param
 *
 * If this is an `ideal` PaymentMethod, this hash contains details about the iDEAL payment method.
 */
final class PaymentMethodsIdealRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'bank' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\V1\PaymentMethods\Post\Ideal\IdealBankEnum $bank {
        set {
            $this->assigning('bank', $value);
            $this->bank = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank' => is_string($value) ? $this->bank = \StripeSDK\Enums\V1\PaymentMethods\Post\Ideal\IdealBankEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
