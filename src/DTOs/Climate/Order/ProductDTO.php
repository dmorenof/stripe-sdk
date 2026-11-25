<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Climate\Order;

final class ProductDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\Climate\Product::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
        [
            'kind' => 'reference',
            'ref' => 'climate.product',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'climate.product' => [
            'kind' => 'object',
            'properties' => [
                'created' => [
                    'kind' => 'integer',
                ],
                'current_prices_per_metric_ton' => [
                    'kind' => 'object',
                    'additional' => [
                        'kind' => 'reference',
                        'ref' => 'climate_removals_products_price',
                    ],
                ],
                'delivery_year' => [
                    'kind' => 'integer',
                    'nullable' => true,
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
                'metric_tons_available' => [
                    'kind' => 'string',
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
                        'climate.product',
                    ],
                ],
                'suppliers' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'climate.supplier',
                    ],
                ],
            ],
            'required' => [
                'created',
                'current_prices_per_metric_ton',
                'id',
                'livemode',
                'metric_tons_available',
                'name',
                'object',
                'suppliers',
            ],
        ],
        'climate.supplier' => [
            'kind' => 'object',
            'properties' => [
                'id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'info_url' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'livemode' => [
                    'kind' => 'boolean',
                ],
                'locations' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'climate_removals_location',
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
                        'climate.supplier',
                    ],
                ],
                'removal_pathway' => [
                    'kind' => 'string',
                    'enum' => [
                        'biomass_carbon_removal_and_storage',
                        'direct_air_capture',
                        'enhanced_weathering',
                        'marine_carbon_removal',
                    ],
                ],
            ],
            'required' => [
                'id',
                'info_url',
                'livemode',
                'locations',
                'name',
                'object',
                'removal_pathway',
            ],
        ],
        'climate_removals_location' => [
            'kind' => 'object',
            'properties' => [
                'city' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'country' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'latitude' => [
                    'kind' => 'number',
                    'nullable' => true,
                ],
                'longitude' => [
                    'kind' => 'number',
                    'nullable' => true,
                ],
                'region' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
            'required' => [
                'country',
            ],
        ],
        'climate_removals_products_price' => [
            'kind' => 'object',
            'properties' => [
                'amount_fees' => [
                    'kind' => 'integer',
                ],
                'amount_subtotal' => [
                    'kind' => 'integer',
                ],
                'amount_total' => [
                    'kind' => 'integer',
                ],
            ],
            'required' => [
                'amount_fees',
                'amount_subtotal',
                'amount_total',
            ],
        ],
    ];
}
