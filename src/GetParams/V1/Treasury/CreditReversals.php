<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Treasury;

final class CreditReversals extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'financial_account',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'financial_account' => 'financial_account',
            'limit' => 'limit',
            'received_credit' => 'received_credit',
            'starting_after' => 'starting_after',
            'status' => 'status',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'received_credit' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public string $financial_account;
    public ?int $limit;
    public ?string $received_credit {
        set {
            $this->assigning('received_credit', $value);
            $this->received_credit = $value;
        }
    }
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Enums\V1\Treasury\CreditReversals\Get\Query\QueryStatusEnum $status;
    public ?\StripeSDK\Requests\V1\Treasury\CreditReversals\Get $body;
}
