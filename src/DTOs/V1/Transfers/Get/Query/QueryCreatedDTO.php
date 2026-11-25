<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\Transfers\Get\Query;

final class QueryCreatedDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\DTOs\DTO48Variant1DTO::class, 'int'];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'gt' => [
                    'kind' => 'integer',
                ],
                'gte' => [
                    'kind' => 'integer',
                ],
                'lt' => [
                    'kind' => 'integer',
                ],
                'lte' => [
                    'kind' => 'integer',
                ],
            ],
        ],
        [
            'kind' => 'integer',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
