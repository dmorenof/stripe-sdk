<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Disputes\Post;

/**
 * treasury_param
 *
 * Params for disputes related to Treasury FinancialAccounts
 */
final class DisputesTreasuryRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'received_debit',
    ];

    protected const array VALIDATION = [
        'received_debit' => [
            'maxLength' => 5000,
        ],
    ];

    public string $received_debit {
        set {
            $this->assigning('received_debit', $value);
            $this->received_debit = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'received_debit' => is_string($value) ? $this->received_debit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
