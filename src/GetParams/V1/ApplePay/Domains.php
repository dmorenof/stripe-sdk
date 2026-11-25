<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\ApplePay;

final class Domains extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'domain_name' => 'domain_name',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'starting_after' => 'starting_after',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'domain_name' => [
            'maxLength' => 5000,
        ],
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public ?string $domain_name {
        set {
            $this->assigning('domain_name', $value);
            $this->domain_name = $value;
        }
    }
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
    public ?\StripeSDK\Requests\V1\ApplePay\Domains\Get $body;
}
