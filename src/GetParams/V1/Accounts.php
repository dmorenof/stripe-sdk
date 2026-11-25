<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1;

final class Accounts extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'created' => 'created',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'starting_after' => 'starting_after',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    public ?\StripeSDK\DTOs\V1\Accounts\Get\Query\QueryCreatedDTO $created;
    public ?string $ending_before;
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public ?string $starting_after;
    public ?\StripeSDK\Requests\V1\Accounts\Get $body;
}
