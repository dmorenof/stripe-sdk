<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\PaymentMethodData;

/**
 * payment_method_param
 */
final class AcssDebitRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account_number',
        'institution_number',
        'transit_number',
    ];

    protected const array VALIDATION = [
        'account_number' => [
            'maxLength' => 5000,
        ],
        'institution_number' => [
            'maxLength' => 5000,
        ],
        'transit_number' => [
            'maxLength' => 5000,
        ],
    ];

    public string $account_number {
        set {
            $this->assigning('account_number', $value);
            $this->account_number = $value;
        }
    }
    public string $institution_number {
        set {
            $this->assigning('institution_number', $value);
            $this->institution_number = $value;
        }
    }
    public string $transit_number {
        set {
            $this->assigning('transit_number', $value);
            $this->transit_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_number' => is_string($value) ? $this->account_number = $value : parent::assignMember($name, $value),
            'institution_number' => is_string($value) ? $this->institution_number = $value : parent::assignMember($name, $value),
            'transit_number' => is_string($value) ? $this->transit_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
