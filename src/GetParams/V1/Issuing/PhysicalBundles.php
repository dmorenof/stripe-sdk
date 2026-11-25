<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Issuing;

final class PhysicalBundles extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'starting_after' => 'starting_after',
            'status' => 'status',
            'type' => 'type',
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
    ];

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
    public ?\StripeSDK\Enums\V1\Issuing\PhysicalBundles\Get\Query\QueryStatusEnum $status;
    public ?\StripeSDK\Enums\V1\Issuing\PhysicalBundles\Get\Query\QueryTypeEnum $type;
    public ?\StripeSDK\Requests\V1\Issuing\PhysicalBundles\Get $body;
}
