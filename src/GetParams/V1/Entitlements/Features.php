<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Entitlements;

final class Features extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'archived' => 'archived',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'lookup_key' => 'lookup_key',
            'starting_after' => 'starting_after',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'lookup_key' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public ?bool $archived;
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public ?string $lookup_key {
        set {
            $this->assigning('lookup_key', $value);
            $this->lookup_key = $value;
        }
    }
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\Entitlements\Features\Get $body;
}
