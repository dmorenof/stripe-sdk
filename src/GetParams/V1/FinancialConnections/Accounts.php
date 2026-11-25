<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\FinancialConnections;

final class Accounts extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'account_holder' => 'account_holder',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'session' => 'session',
            'starting_after' => 'starting_after',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'session' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\DTOs\V1\FinancialConnections\Accounts\Get\Query\AccountHolderDTO $account_holder;
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public ?string $session {
        set {
            $this->assigning('session', $value);
            $this->session = $value;
        }
    }
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\FinancialConnections\Accounts\Get $body;
}
