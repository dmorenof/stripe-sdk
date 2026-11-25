<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription\ScheduleAddInvoiceItem;

final class PriceDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\Price::class, \StripeSDK\DTOs\Deleted\Price::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
        [
            'kind' => 'reference',
            'ref' => 'price',
        ],
        [
            'kind' => 'reference',
            'ref' => 'deleted_price',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'currency_option' => [
            'kind' => 'object',
            'properties' => [
                'custom_unit_amount' => [
                    'kind' => 'reference',
                    'ref' => 'custom_unit_amount',
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
                'tiers' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'price_tier',
                    ],
                ],
                'unit_amount' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'unit_amount_decimal' => [
                    'kind' => 'string',
                    'nullable' => true,
                ],
            ],
        ],
        'custom_unit_amount' => [
            'kind' => 'object',
            'properties' => [
                'maximum' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'minimum' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'preset' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
            ],
        ],
        'deleted_price' => [
            'kind' => 'object',
            'properties' => [
                'deleted' => [
                    'kind' => 'boolean',
                    'rules' => [
                        'jsonSchema' => '{"enum":[true]}',
                    ],
                ],
                'id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'price',
                    ],
                ],
            ],
            'required' => [
                'deleted',
                'id',
                'object',
            ],
        ],
        'deleted_product' => [
            'kind' => 'object',
            'properties' => [
                'deleted' => [
                    'kind' => 'boolean',
                    'rules' => [
                        'jsonSchema' => '{"enum":[true]}',
                    ],
                ],
                'id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'product',
                    ],
                ],
            ],
            'required' => [
                'deleted',
                'id',
                'object',
            ],
        ],
        'package_dimensions' => [
            'kind' => 'object',
            'properties' => [
                'height' => [
                    'kind' => 'number',
                ],
                'length' => [
                    'kind' => 'number',
                ],
                'weight' => [
                    'kind' => 'number',
                ],
                'width' => [
                    'kind' => 'number',
                ],
            ],
            'required' => [
                'height',
                'length',
                'weight',
                'width',
            ],
        ],
        'price' => [
            'kind' => 'object',
            'properties' => [
                'active' => [
                    'kind' => 'boolean',
                ],
                'billing_scheme' => [
                    'kind' => 'string',
                    'enum' => [
                        'per_unit',
                        'tiered',
                    ],
                ],
                'created' => [
                    'kind' => 'integer',
                ],
                'currency' => [
                    'kind' => 'string',
                ],
                'currency_options' => [
                    'kind' => 'object',
                    'additional' => [
                        'kind' => 'reference',
                        'ref' => 'currency_option',
                    ],
                ],
                'custom_unit_amount' => [
                    'kind' => 'reference',
                    'ref' => 'custom_unit_amount',
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
                'lookup_key' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
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
                'nickname' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'price',
                    ],
                ],
                'product' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                        [
                            'kind' => 'reference',
                            'ref' => 'product',
                        ],
                        [
                            'kind' => 'reference',
                            'ref' => 'deleted_product',
                        ],
                    ],
                ],
                'recurring' => [
                    'kind' => 'reference',
                    'ref' => 'recurring',
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
                'tiers' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'price_tier',
                    ],
                ],
                'tiers_mode' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'graduated',
                        'volume',
                    ],
                ],
                'transform_quantity' => [
                    'kind' => 'reference',
                    'ref' => 'transform_quantity',
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'one_time',
                        'recurring',
                    ],
                ],
                'unit_amount' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'unit_amount_decimal' => [
                    'kind' => 'string',
                    'nullable' => true,
                ],
            ],
            'required' => [
                'active',
                'billing_scheme',
                'created',
                'currency',
                'id',
                'livemode',
                'metadata',
                'object',
                'product',
                'type',
            ],
        ],
        'price_tier' => [
            'kind' => 'object',
            'properties' => [
                'flat_amount' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'flat_amount_decimal' => [
                    'kind' => 'string',
                    'nullable' => true,
                ],
                'unit_amount' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'unit_amount_decimal' => [
                    'kind' => 'string',
                    'nullable' => true,
                ],
                'up_to' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
            ],
        ],
        'product' => [
            'kind' => 'object',
            'properties' => [
                'active' => [
                    'kind' => 'boolean',
                ],
                'created' => [
                    'kind' => 'integer',
                ],
                'default_price' => [
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
                            'ref' => 'price',
                        ],
                    ],
                ],
                'description' => [
                    'kind' => 'string',
                    'nullable' => true,
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
                'images' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 5000,
                        ],
                    ],
                ],
                'livemode' => [
                    'kind' => 'boolean',
                ],
                'marketing_features' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'product_marketing_feature',
                    ],
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
                'name' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'product',
                    ],
                ],
                'package_dimensions' => [
                    'kind' => 'reference',
                    'ref' => 'package_dimensions',
                ],
                'shippable' => [
                    'kind' => 'boolean',
                    'nullable' => true,
                ],
                'statement_descriptor' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
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
                'tax_details' => [
                    'kind' => 'reference',
                    'ref' => 'tax_product_tax_details_resource_tax_details',
                ],
                'unit_label' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'updated' => [
                    'kind' => 'integer',
                ],
                'url' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 2048,
                    ],
                ],
            ],
            'required' => [
                'active',
                'created',
                'id',
                'images',
                'livemode',
                'marketing_features',
                'metadata',
                'name',
                'object',
                'updated',
            ],
        ],
        'product_marketing_feature' => [
            'kind' => 'object',
            'properties' => [
                'name' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'recurring' => [
            'kind' => 'object',
            'properties' => [
                'interval' => [
                    'kind' => 'string',
                    'enum' => [
                        'day',
                        'month',
                        'week',
                        'year',
                    ],
                ],
                'interval_count' => [
                    'kind' => 'integer',
                ],
                'meter' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'usage_type' => [
                    'kind' => 'string',
                    'enum' => [
                        'licensed',
                        'metered',
                    ],
                ],
            ],
            'required' => [
                'interval',
                'interval_count',
                'usage_type',
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
        'tax_product_tax_details_resource_tax_details' => [
            'kind' => 'object',
            'properties' => [
                'performance_location' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'tax_code' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'transform_quantity' => [
            'kind' => 'object',
            'properties' => [
                'divide_by' => [
                    'kind' => 'integer',
                ],
                'round' => [
                    'kind' => 'string',
                    'enum' => [
                        'down',
                        'up',
                    ],
                ],
            ],
            'required' => [
                'divide_by',
                'round',
            ],
        ],
    ];
}
