<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1;

final class Payouts extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'arrival_date' => 'arrival_date',
            'created' => 'created',
            'destination' => 'destination',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'starting_after' => 'starting_after',
            'status' => 'status',
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
        'status' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\DTOs\V1\Payouts\Get\Query\ArrivalDateDTO $arrival_date;
    public ?\StripeSDK\DTOs\V1\Payouts\Get\Query\QueryCreatedDTO $created;
    public ?string $destination;
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
    public ?string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\Payouts\Get $body;
}
