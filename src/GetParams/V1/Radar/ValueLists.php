<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Radar;

final class ValueLists extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'alias' => 'alias',
            'contains' => 'contains',
            'created' => 'created',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'starting_after' => 'starting_after',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'alias' => [
            'maxLength' => 100,
        ],
        'contains' => [
            'maxLength' => 800,
        ],
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public ?string $alias {
        set {
            $this->assigning('alias', $value);
            $this->alias = $value;
        }
    }
    public ?string $contains {
        set {
            $this->assigning('contains', $value);
            $this->contains = $value;
        }
    }
    public ?\StripeSDK\DTOs\V1\Radar\ValueLists\Get\Query\QueryCreatedDTO $created;
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
    public ?\StripeSDK\Requests\V1\Radar\ValueLists\Get $body;
}
