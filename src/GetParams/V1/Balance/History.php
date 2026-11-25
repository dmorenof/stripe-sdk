<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Balance;

final class History extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'created' => 'created',
            'currency' => 'currency',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'payout' => 'payout',
            'source' => 'source',
            'starting_after' => 'starting_after',
            'type' => 'type',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'payout' => [
            'maxLength' => 5000,
        ],
        'source' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\DTOs\V1\Balance\History\Get\Query\QueryCreatedDTO $created;
    public ?string $currency;
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public ?string $payout {
        set {
            $this->assigning('payout', $value);
            $this->payout = $value;
        }
    }
    public ?string $source {
        set {
            $this->assigning('source', $value);
            $this->source = $value;
        }
    }
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\Balance\History\Get $body;
}
