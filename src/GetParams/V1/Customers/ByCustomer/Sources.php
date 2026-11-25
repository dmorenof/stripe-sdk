<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Customers\ByCustomer;

final class Sources extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'object' => 'object_',
            'starting_after' => 'starting_after',
        ],
        'header' => [],
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'object_' => [
            'maxLength' => 5000,
        ],
    ];

    public ?string $ending_before;
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public ?string $object_ {
        set {
            $this->assigning('object_', $value);
            $this->object_ = $value;
        }
    }
    public ?string $starting_after;
    public ?\StripeSDK\Requests\V1\Customers\ByCustomer\Sources\Get $body;
}
