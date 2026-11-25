<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post;

final class OptionalItemsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\OptionalItemsRequestVariant1Array\ItemsVariant1Collection::class, \StripeSDK\Enums\OptionalItemsRequestVariant2\ItemsVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'object',
                'properties' => [
                    'adjustable_quantity' => [
                        'kind' => 'object',
                        'properties' => [
                            'enabled' => [
                                'kind' => 'boolean',
                            ],
                            'maximum' => [
                                'kind' => 'integer',
                            ],
                            'minimum' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'required' => [
                            'enabled',
                        ],
                    ],
                    'price' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 5000,
                        ],
                    ],
                    'quantity' => [
                        'kind' => 'integer',
                    ],
                ],
                'required' => [
                    'price',
                    'quantity',
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
