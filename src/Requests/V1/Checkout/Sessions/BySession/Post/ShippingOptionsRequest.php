<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\BySession\Post;

final class ShippingOptionsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\ShippingOptionsRequestVariant1Array\OptionsVariant1Collection::class, \StripeSDK\Enums\ShippingOptionsRequestVariant2\OptionsVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'object',
                'properties' => [
                    'shipping_rate' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 5000,
                        ],
                    ],
                    'shipping_rate_data' => [
                        'kind' => 'object',
                        'properties' => [
                            'delivery_estimate' => [
                                'kind' => 'object',
                                'properties' => [
                                    'maximum' => [
                                        'kind' => 'object',
                                        'properties' => [
                                            'unit' => [
                                                'kind' => 'string',
                                                'enum' => [
                                                    'business_day',
                                                    'day',
                                                    'hour',
                                                    'month',
                                                    'week',
                                                ],
                                            ],
                                            'value' => [
                                                'kind' => 'integer',
                                            ],
                                        ],
                                        'required' => [
                                            'unit',
                                            'value',
                                        ],
                                    ],
                                    'minimum' => [
                                        'kind' => 'object',
                                        'properties' => [
                                            'unit' => [
                                                'kind' => 'string',
                                                'enum' => [
                                                    'business_day',
                                                    'day',
                                                    'hour',
                                                    'month',
                                                    'week',
                                                ],
                                            ],
                                            'value' => [
                                                'kind' => 'integer',
                                            ],
                                        ],
                                        'required' => [
                                            'unit',
                                            'value',
                                        ],
                                    ],
                                ],
                            ],
                            'display_name' => [
                                'kind' => 'string',
                                'rules' => [
                                    'maxLength' => 100,
                                ],
                            ],
                            'fixed_amount' => [
                                'kind' => 'object',
                                'properties' => [
                                    'amount' => [
                                        'kind' => 'integer',
                                    ],
                                    'currency' => [
                                        'kind' => 'string',
                                    ],
                                    'currency_options' => [
                                        'kind' => 'object',
                                        'additional' => [
                                            'kind' => 'object',
                                            'properties' => [
                                                'amount' => [
                                                    'kind' => 'integer',
                                                ],
                                                'tax_behavior' => [
                                                    'kind' => 'string',
                                                    'enum' => [
                                                        'exclusive',
                                                        'inclusive',
                                                        'unspecified',
                                                    ],
                                                ],
                                            ],
                                            'required' => [
                                                'amount',
                                            ],
                                        ],
                                    ],
                                ],
                                'required' => [
                                    'amount',
                                    'currency',
                                ],
                            ],
                            'metadata' => [
                                'kind' => 'object',
                                'additional' => [
                                    'kind' => 'string',
                                ],
                            ],
                            'tax_behavior' => [
                                'kind' => 'string',
                                'enum' => [
                                    'exclusive',
                                    'inclusive',
                                    'unspecified',
                                ],
                            ],
                            'tax_code' => [
                                'kind' => 'string',
                            ],
                            'type' => [
                                'kind' => 'string',
                                'enum' => [
                                    'fixed_amount',
                                ],
                            ],
                        ],
                        'required' => [
                            'display_name',
                        ],
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
