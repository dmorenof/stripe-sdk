<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\FinancialConnections\Transactions\Get\Query;

/**
 * transaction_refresh_params
 */
final class TransactionRefreshDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'after',
    ];

    protected const array VALIDATION = [
        'after' => [
            'maxLength' => 5000,
        ],
    ];

    public string $after {
        set {
            $this->assigning('after', $value);
            $this->after = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'after' => is_string($value) ? $this->after = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
