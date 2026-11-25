<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1;

final class FileLinks extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'created' => 'created',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'expired' => 'expired',
            'file' => 'file',
            'limit' => 'limit',
            'starting_after' => 'starting_after',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'file' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\DTOs\V1\FileLinks\Get\Query\QueryCreatedDTO $created;
    public ?string $ending_before;
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?bool $expired;
    public ?string $file {
        set {
            $this->assigning('file', $value);
            $this->file = $value;
        }
    }
    public ?int $limit;
    public ?string $starting_after;
    public ?\StripeSDK\Requests\V1\FileLinks\Get $body;
}
