<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\FinancialConnections;

final class Transactions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'account' => 'account',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'starting_after' => 'starting_after',
            'transacted_at' => 'transacted_at',
            'transaction_refresh' => 'transaction_refresh',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'account' => [
            'maxLength' => 5000,
        ],
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public string $account {
        set {
            $this->assigning('account', $value);
            $this->account = $value;
        }
    }
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\DTOs\V1\FinancialConnections\Transactions\Get\Query\TransactedAtDTO $transacted_at;
    public ?\StripeSDK\DTOs\V1\FinancialConnections\Transactions\Get\Query\TransactionRefreshDTO $transaction_refresh;
    public ?\StripeSDK\Requests\V1\FinancialConnections\Transactions\Get $body;
}
