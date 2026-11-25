<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment\LinksResourceShippingOption;

final class ShippingRateDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\ShippingRate::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
        [
            'kind' => 'reference',
            'ref' => 'shipping_rate',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'shipping_rate' => [
            'kind' => 'object',
            'properties' => [
                'active' => [
                    'kind' => 'boolean',
                ],
                'created' => [
                    'kind' => 'integer',
                ],
                'delivery_estimate' => [
                    'kind' => 'reference',
                    'ref' => 'shipping_rate_delivery_estimate',
                ],
                'display_name' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'fixed_amount' => [
                    'kind' => 'reference',
                    'ref' => 'shipping_rate_fixed_amount',
                ],
                'id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'livemode' => [
                    'kind' => 'boolean',
                ],
                'metadata' => [
                    'kind' => 'object',
                    'additional' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 500,
                        ],
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'shipping_rate',
                    ],
                ],
                'tax_behavior' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'exclusive',
                        'inclusive',
                        'unspecified',
                    ],
                ],
                'tax_code' => [
                    'kind' => 'anyOf',
                    'nullable' => true,
                    'branches' => [
                        [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                        [
                            'kind' => 'reference',
                            'ref' => 'tax_code',
                        ],
                    ],
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'fixed_amount',
                    ],
                ],
            ],
            'required' => [
                'active',
                'created',
                'id',
                'livemode',
                'metadata',
                'object',
                'type',
            ],
        ],
        'shipping_rate_currency_option' => [
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
                'tax_behavior',
            ],
        ],
        'shipping_rate_delivery_estimate' => [
            'kind' => 'object',
            'properties' => [
                'maximum' => [
                    'kind' => 'reference',
                    'ref' => 'shipping_rate_delivery_estimate_bound',
                ],
                'minimum' => [
                    'kind' => 'reference',
                    'ref' => 'shipping_rate_delivery_estimate_bound',
                ],
            ],
        ],
        'shipping_rate_delivery_estimate_bound' => [
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
        'shipping_rate_fixed_amount' => [
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
                        'kind' => 'reference',
                        'ref' => 'shipping_rate_currency_option',
                    ],
                ],
            ],
            'required' => [
                'amount',
                'currency',
            ],
        ],
        'tax_code' => [
            'kind' => 'object',
            'properties' => [
                'description' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'name' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'tax_code',
                    ],
                ],
                'requirements' => [
                    'kind' => 'reference',
                    'ref' => 'tax_code_requirements',
                ],
            ],
            'required' => [
                'description',
                'id',
                'name',
                'object',
            ],
        ],
        'tax_code_requirements' => [
            'kind' => 'object',
            'properties' => [
                'performance_location' => [
                    'kind' => 'string',
                    'enum' => [
                        'optional',
                        'required',
                    ],
                ],
            ],
            'required' => [
                'performance_location',
            ],
        ],
    ];
}
