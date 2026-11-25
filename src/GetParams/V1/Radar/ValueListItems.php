<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Radar;

final class ValueListItems extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'value_list',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'created' => 'created',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'starting_after' => 'starting_after',
            'value' => 'value',
            'value_list' => 'value_list',
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
        'value' => [
            'maxLength' => 800,
        ],
        'value_list' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\DTOs\V1\Radar\ValueListItems\Get\Query\QueryCreatedDTO $created;
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
    public ?string $value {
        set {
            $this->assigning('value', $value);
            $this->value = $value;
        }
    }
    public string $value_list {
        set {
            $this->assigning('value_list', $value);
            $this->value_list = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\Radar\ValueListItems\Get $body;
}
