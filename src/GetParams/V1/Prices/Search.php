<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Prices;

final class Search extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'query',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'expand' => 'expand',
            'limit' => 'limit',
            'page' => 'page',
            'query' => 'query',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'page' => [
            'maxLength' => 5000,
        ],
        'query' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public ?string $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public string $query {
        set {
            $this->assigning('query', $value);
            $this->query = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\Prices\Search\Get $body;
}
