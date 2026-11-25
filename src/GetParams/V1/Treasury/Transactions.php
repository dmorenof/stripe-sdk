<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Treasury;

final class Transactions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'financial_account',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'created' => 'created',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'financial_account' => 'financial_account',
            'limit' => 'limit',
            'order_by' => 'order_by',
            'starting_after' => 'starting_after',
            'status' => 'status',
            'status_transitions' => 'status_transitions',
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
    ];

    public ?\StripeSDK\DTOs\V1\Treasury\Transactions\Get\Query\QueryCreatedDTO $created;
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public string $financial_account;
    public ?int $limit;
    public ?\StripeSDK\Enums\V1\Treasury\Transactions\Get\Query\OrderByEnum $order_by;
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Enums\V1\Treasury\Transactions\Get\Query\QueryStatusEnum $status;
    public ?\StripeSDK\DTOs\V1\Treasury\Transactions\Get\Query\StatusTransitionsDTO $status_transitions;
    public ?\StripeSDK\Requests\V1\Treasury\Transactions\Get $body;
}
