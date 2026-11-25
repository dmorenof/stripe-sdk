<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Issuing;

final class Tokens extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'card',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'card' => 'card',
            'created' => 'created',
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
        'card' => [
            'maxLength' => 5000,
        ],
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public string $card {
        set {
            $this->assigning('card', $value);
            $this->card = $value;
        }
    }
    public ?\StripeSDK\DTOs\V1\Issuing\Tokens\Get\Query\QueryCreatedDTO $created;
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
    public ?\StripeSDK\Enums\V1\Issuing\Tokens\Get\Query\QueryStatusEnum $status;
    public ?\StripeSDK\Requests\V1\Issuing\Tokens\Get $body;
}
