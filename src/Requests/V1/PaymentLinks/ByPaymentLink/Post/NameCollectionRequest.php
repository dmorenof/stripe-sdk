<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post;

final class NameCollectionRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\NameCollectionRequestVariant1\CollectionVariant1Request::class, \StripeSDK\Enums\NameCollectionRequestVariant2\CollectionVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'business' => [
                    'kind' => 'object',
                    'properties' => [
                        'enabled' => [
                            'kind' => 'boolean',
                        ],
                        'optional' => [
                            'kind' => 'boolean',
                        ],
                    ],
                    'required' => [
                        'enabled',
                    ],
                ],
                'individual' => [
                    'kind' => 'object',
                    'properties' => [
                        'enabled' => [
                            'kind' => 'boolean',
                        ],
                        'optional' => [
                            'kind' => 'boolean',
                        ],
                    ],
                    'required' => [
                        'enabled',
                    ],
                ],
            ],
        ],
        [
            'kind' => 'string',
            'enum' => [
                '',
            ],
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
