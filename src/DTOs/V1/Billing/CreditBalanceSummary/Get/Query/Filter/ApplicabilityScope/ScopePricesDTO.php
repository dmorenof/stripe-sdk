<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\Billing\CreditBalanceSummary\Get\Query\Filter\ApplicabilityScope;

/**
 * applicable_price_param
 */
final class ScopePricesDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
