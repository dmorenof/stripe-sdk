<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Treasury;

final class TransactionEntries extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'financial_account',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'created' => 'created',
            'effective_at' => 'effective_at',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'financial_account' => 'financial_account',
            'limit' => 'limit',
            'order_by' => 'order_by',
            'starting_after' => 'starting_after',
            'transaction' => 'transaction',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
        'transaction' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\DTOs\V1\Treasury\TransactionEntries\Get\Query\QueryCreatedDTO $created;
    public ?\StripeSDK\DTOs\V1\Treasury\TransactionEntries\Get\Query\EffectiveAtDTO $effective_at;
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public string $financial_account;
    public ?int $limit;
    public ?\StripeSDK\Enums\V1\Treasury\TransactionEntries\Get\Query\OrderByEnum $order_by;
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?string $transaction {
        set {
            $this->assigning('transaction', $value);
            $this->transaction = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\Treasury\TransactionEntries\Get $body;
}
