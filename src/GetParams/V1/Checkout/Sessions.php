<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Checkout;

final class Sessions extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'created' => 'created',
            'customer' => 'customer',
            'customer_account' => 'customer_account',
            'customer_details' => 'customer_details',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'payment_intent' => 'payment_intent',
            'payment_link' => 'payment_link',
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
        'payment_intent' => [
            'maxLength' => 5000,
        ],
        'payment_link' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
        'subscription' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\DTOs\V1\Checkout\Sessions\Get\Query\QueryCreatedDTO $created;
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
    public ?\StripeSDK\DTOs\V1\Checkout\Sessions\Get\Query\CustomerDetailsDTO $customer_details;
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public ?string $payment_intent {
        set {
            $this->assigning('payment_intent', $value);
            $this->payment_intent = $value;
        }
    }
    public ?string $payment_link {
        set {
            $this->assigning('payment_link', $value);
            $this->payment_link = $value;
        }
    }
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Enums\V1\Checkout\Sessions\Get\Query\QueryStatusEnum $status;
    public ?string $subscription {
        set {
            $this->assigning('subscription', $value);
            $this->subscription = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\Checkout\Sessions\Get $body;
}
