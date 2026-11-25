<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Radar;

final class EarlyFraudWarnings extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'charge' => 'charge',
            'created' => 'created',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'payment_intent' => 'payment_intent',
            'starting_after' => 'starting_after',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'payment_intent' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public ?string $charge;
    public ?\StripeSDK\DTOs\V1\Radar\EarlyFraudWarnings\Get\Query\QueryCreatedDTO $created;
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public ?string $payment_intent {
        set {
            $this->assigning('payment_intent', $value);
            $this->payment_intent = $value;
        }
    }
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\Radar\EarlyFraudWarnings\Get $body;
}
