<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1;

final class SetupIntents extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'attach_to_self' => 'attach_to_self',
            'created' => 'created',
            'customer' => 'customer',
            'customer_account' => 'customer_account',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'payment_method' => 'payment_method',
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
        'payment_method' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public ?bool $attach_to_self;
    public ?\StripeSDK\DTOs\V1\SetupIntents\Get\Query\QueryCreatedDTO $created;
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
    public ?string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\SetupIntents\Get $body;
}
