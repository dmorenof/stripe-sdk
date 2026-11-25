<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1;

final class Products extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'active' => 'active',
            'created' => 'created',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'ids' => 'ids',
            'limit' => 'limit',
            'shippable' => 'shippable',
            'starting_after' => 'starting_after',
            'url' => 'url',
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
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    public ?bool $active;
    public ?\StripeSDK\DTOs\V1\Products\Get\Query\QueryCreatedDTO $created;
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $ids;
    public ?int $limit;
    public ?bool $shippable;
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\Products\Get $body;
}
