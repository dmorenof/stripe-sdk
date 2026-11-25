<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Terminal;

final class Readers extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'device_type' => 'device_type',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'location' => 'location',
            'serial_number' => 'serial_number',
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
        'location' => [
            'maxLength' => 5000,
        ],
        'serial_number' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\Enums\V1\Terminal\Readers\Get\Query\DeviceTypeEnum $device_type;
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public ?string $location {
        set {
            $this->assigning('location', $value);
            $this->location = $value;
        }
    }
    public ?string $serial_number {
        set {
            $this->assigning('serial_number', $value);
            $this->serial_number = $value;
        }
    }
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Enums\V1\Terminal\Readers\Get\Query\QueryStatusEnum $status;
    public ?\StripeSDK\Requests\V1\Terminal\Readers\Get $body;
}
