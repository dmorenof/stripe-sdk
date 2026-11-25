<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1;

final class Prices extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'active' => 'active',
            'created' => 'created',
            'currency' => 'currency',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'lookup_keys' => 'lookup_keys',
            'product' => 'product',
            'recurring' => 'recurring',
            'starting_after' => 'starting_after',
            'type' => 'type',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'product' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public ?bool $active;
    public ?\StripeSDK\DTOs\V1\Prices\Get\Query\QueryCreatedDTO $created;
    public ?string $currency;
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $lookup_keys;
    public ?string $product {
        set {
            $this->assigning('product', $value);
            $this->product = $value;
        }
    }
    public ?\StripeSDK\DTOs\V1\Prices\Get\Query\QueryRecurringDTO $recurring;
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Enums\V1\Prices\Get\Query\QueryTypeEnum $type;
    public ?\StripeSDK\Requests\V1\Prices\Get $body;
}
