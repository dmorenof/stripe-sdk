<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1;

final class Charges extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'created' => 'created',
            'customer' => 'customer',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'payment_intent' => 'payment_intent',
            'starting_after' => 'starting_after',
            'transfer_group' => 'transfer_group',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'payment_intent' => [
            'maxLength' => 5000,
        ],
        'transfer_group' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\DTOs\V1\Charges\Get\Query\QueryCreatedDTO $created;
    public ?string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    public ?string $ending_before;
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public ?string $payment_intent {
        set {
            $this->assigning('payment_intent', $value);
            $this->payment_intent = $value;
        }
    }
    public ?string $starting_after;
    public ?string $transfer_group {
        set {
            $this->assigning('transfer_group', $value);
            $this->transfer_group = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\Charges\Get $body;
}
