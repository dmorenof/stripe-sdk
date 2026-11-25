<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1;

final class Refunds extends \Dmorenof\SdkRuntime\DTO
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
        'payment_intent' => [
            'maxLength' => 5000,
        ],
    ];

    public ?string $charge;
    public ?\StripeSDK\DTOs\V1\Refunds\Get\Query\QueryCreatedDTO $created;
    public ?string $ending_before;
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public ?string $payment_intent {
        set {
            $this->assigning('payment_intent', $value);
            $this->payment_intent = $value;
        }
    }
    public ?string $starting_after;
    public ?\StripeSDK\Requests\V1\Refunds\Get $body;
}
