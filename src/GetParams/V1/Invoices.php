<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1;

final class Invoices extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'collection_method' => 'collection_method',
            'created' => 'created',
            'customer' => 'customer',
            'customer_account' => 'customer_account',
            'due_date' => 'due_date',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'starting_after' => 'starting_after',
            'status' => 'status',
            'subscription' => 'subscription',
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
        'subscription' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\Enums\V1\Invoices\Get\Query\CollectionMethodEnum $collection_method;
    public ?\StripeSDK\DTOs\V1\Invoices\Get\Query\QueryCreatedDTO $created;
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
    public ?\StripeSDK\DTOs\V1\Invoices\Get\Query\DueDateDTO $due_date;
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
    public ?\StripeSDK\Enums\V1\Invoices\Get\Query\QueryStatusEnum $status;
    public ?string $subscription {
        set {
            $this->assigning('subscription', $value);
            $this->subscription = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\Invoices\Get $body;
}
