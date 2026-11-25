<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Radar\ValueLists;

final class ByValueList extends \Dmorenof\SdkRuntime\DTO
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
    public ?\StripeSDK\Requests\V1\Radar\ValueLists\ByValueList\Get $body;
}
