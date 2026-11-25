<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\SetupIntents;

final class ByIntent extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'client_secret' => 'client_secret',
            'expand' => 'expand',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'client_secret' => [
            'maxLength' => 5000,
        ],
    ];

    public ?string $client_secret {
        set {
            $this->assigning('client_secret', $value);
            $this->client_secret = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?\StripeSDK\Requests\V1\SetupIntents\ByIntent\Get $body;
}
