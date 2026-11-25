<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Identity\VerificationSessions;

final class BySession extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'expand' => 'expand',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?\StripeSDK\Requests\V1\Identity\VerificationSessions\BySession\Get $body;
}
