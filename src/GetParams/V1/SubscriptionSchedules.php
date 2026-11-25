<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1;

final class SubscriptionSchedules extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'canceled_at' => 'canceled_at',
            'completed_at' => 'completed_at',
            'created' => 'created',
            'customer' => 'customer',
            'customer_account' => 'customer_account',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'released_at' => 'released_at',
            'scheduled' => 'scheduled',
            'starting_after' => 'starting_after',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\DTOs\V1\SubscriptionSchedules\Get\Query\CanceledAtDTO $canceled_at;
    public ?\StripeSDK\DTOs\V1\SubscriptionSchedules\Get\Query\CompletedAtDTO $completed_at;
    public ?\StripeSDK\DTOs\V1\SubscriptionSchedules\Get\Query\QueryCreatedDTO $created;
    public ?string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
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
    public ?\StripeSDK\DTOs\V1\SubscriptionSchedules\Get\Query\ReleasedAtDTO $released_at;
    public ?bool $scheduled;
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\SubscriptionSchedules\Get $body;
}
