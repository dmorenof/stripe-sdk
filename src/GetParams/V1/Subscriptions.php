<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1;

final class Subscriptions extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'automatic_tax' => 'automatic_tax',
            'collection_method' => 'collection_method',
            'created' => 'created',
            'current_period_end' => 'current_period_end',
            'current_period_start' => 'current_period_start',
            'customer' => 'customer',
            'customer_account' => 'customer_account',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'price' => 'price',
            'starting_after' => 'starting_after',
            'status' => 'status',
            'test_clock' => 'test_clock',
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
        'price' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
        'test_clock' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\DTOs\V1\Subscriptions\Get\Query\AutomaticTaxDTO $automatic_tax;
    public ?\StripeSDK\Enums\V1\Subscriptions\Get\Query\CollectionMethodEnum $collection_method;
    public ?\StripeSDK\DTOs\V1\Subscriptions\Get\Query\QueryCreatedDTO $created;
    public ?\StripeSDK\DTOs\V1\Subscriptions\Get\Query\PeriodEndDTO $current_period_end;
    public ?\StripeSDK\DTOs\V1\Subscriptions\Get\Query\PeriodStartDTO $current_period_start;
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
    public ?string $price {
        set {
            $this->assigning('price', $value);
            $this->price = $value;
        }
    }
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Enums\V1\Subscriptions\Get\Query\QueryStatusEnum $status;
    public ?string $test_clock {
        set {
            $this->assigning('test_clock', $value);
            $this->test_clock = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\Subscriptions\Get $body;
}
