<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Billing\Meters\ById;

final class EventSummaries extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customer',
        'end_time',
        'start_time',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'customer' => 'customer',
            'end_time' => 'end_time',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'start_time' => 'start_time',
            'starting_after' => 'starting_after',
            'value_grouping_window' => 'value_grouping_window',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    public int $end_time;
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public int $start_time;
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Enums\V1\Billing\Meters\ById\EventSummaries\Get\Query\GroupingWindowEnum $value_grouping_window;
    public ?\StripeSDK\Requests\V1\Billing\Meters\ById\EventSummaries\Get $body;
}
