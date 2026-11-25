<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Issuing;

final class Transactions extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'card' => 'card',
            'cardholder' => 'cardholder',
            'created' => 'created',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'starting_after' => 'starting_after',
            'type' => 'type',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'card' => [
            'maxLength' => 5000,
        ],
        'cardholder' => [
            'maxLength' => 5000,
        ],
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public ?string $card {
        set {
            $this->assigning('card', $value);
            $this->card = $value;
        }
    }
    public ?string $cardholder {
        set {
            $this->assigning('cardholder', $value);
            $this->cardholder = $value;
        }
    }
    public ?\StripeSDK\DTOs\V1\Issuing\Transactions\Get\Query\QueryCreatedDTO $created;
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
    public ?\StripeSDK\Enums\V1\Issuing\Transactions\Get\Query\QueryTypeEnum $type;
    public ?\StripeSDK\Requests\V1\Issuing\Transactions\Get $body;
}
