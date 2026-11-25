<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1;

final class Transfers extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'created' => 'created',
            'destination' => 'destination',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'starting_after' => 'starting_after',
            'transfer_group' => 'transfer_group',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'destination' => [
            'maxLength' => 5000,
        ],
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
        'transfer_group' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\DTOs\V1\Transfers\Get\Query\QueryCreatedDTO $created;
    public ?string $destination {
        set {
            $this->assigning('destination', $value);
            $this->destination = $value;
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
    public ?string $transfer_group {
        set {
            $this->assigning('transfer_group', $value);
            $this->transfer_group = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\Transfers\Get $body;
}
