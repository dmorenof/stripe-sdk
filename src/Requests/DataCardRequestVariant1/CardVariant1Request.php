<?php

declare(strict_types=1);

namespace StripeSDK\Requests\DataCardRequestVariant1;

/**
 * card
 */
final class CardVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'exp_month',
        'exp_year',
        'number',
    ];

    protected const array VALIDATION = [
        'cvc' => [
            'maxLength' => 5000,
        ],
        'number' => [
            'maxLength' => 5000,
        ],
    ];

    public string $cvc {
        set {
            $this->assigning('cvc', $value);
            $this->cvc = $value;
        }
    }
    public int $exp_month;
    public int $exp_year;
    public string $number {
        set {
            $this->assigning('number', $value);
            $this->number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cvc' => is_string($value) ? $this->cvc = $value : parent::assignMember($name, $value),
            'exp_month' => is_int($value) ? $this->exp_month = $value : parent::assignMember($name, $value),
            'exp_year' => is_int($value) ? $this->exp_year = $value : parent::assignMember($name, $value),
            'number' => is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
