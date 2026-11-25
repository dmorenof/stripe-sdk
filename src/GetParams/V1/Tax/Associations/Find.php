<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Tax\Associations;

final class Find extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payment_intent',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'expand' => 'expand',
            'payment_intent' => 'payment_intent',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'payment_intent' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public string $payment_intent {
        set {
            $this->assigning('payment_intent', $value);
            $this->payment_intent = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\Tax\Associations\Find\Get $body;
}
