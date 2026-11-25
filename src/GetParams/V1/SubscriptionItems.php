<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1;

final class SubscriptionItems extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'subscription',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'starting_after' => 'starting_after',
            'subscription' => 'subscription',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'subscription' => [
            'maxLength' => 5000,
        ],
    ];

    public ?string $ending_before;
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public ?string $starting_after;
    public string $subscription {
        set {
            $this->assigning('subscription', $value);
            $this->subscription = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\SubscriptionItems\Get $body;
}
