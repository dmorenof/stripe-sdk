<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Configurations\Post\Features\SubscriptionUpdate;

final class UpdateProductsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\ProductsVariant1Collection::class, \StripeSDK\Enums\ProductsVariant2Enum::class];
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
                    'prices' => [
                        'kind' => 'array',
                        'items' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                    ],
                    'product' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 5000,
                        ],
                    ],
                ],
                'required' => [
                    'prices',
                    'product',
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
