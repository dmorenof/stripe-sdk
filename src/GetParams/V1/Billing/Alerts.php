<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Billing;

final class Alerts extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'alert_type' => 'alert_type',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'meter' => 'meter',
            'starting_after' => 'starting_after',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'meter' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\Enums\V1\Billing\Alerts\Get\Query\AlertTypeEnum $alert_type;
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public ?string $meter {
        set {
            $this->assigning('meter', $value);
            $this->meter = $value;
        }
    }
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\Billing\Alerts\Get $body;
}
