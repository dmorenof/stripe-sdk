<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\PaymentMethodData;

/**
 * param
 */
final class DataIdealRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'bank' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\V1\PaymentIntents\ByIntent\Confirm\Post\PaymentMethodData\Ideal\IdealBankEnum $bank {
        set {
            $this->assigning('bank', $value);
            $this->bank = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank' => is_string($value) ? $this->bank = \StripeSDK\Enums\V1\PaymentIntents\ByIntent\Confirm\Post\PaymentMethodData\Ideal\IdealBankEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
