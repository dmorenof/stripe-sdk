<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AmountDetailsRequest2Variant1;

final class LineItemsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\LineItemsRequest4Variant1Array\Request4Variant1Collection::class, \StripeSDK\Enums\LineItemsRequest4Variant2\Request4Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'object',
                'properties' => [
                    'discount_amount' => [
                        'kind' => 'integer',
                    ],
                    'payment_method_options' => [
                        'kind' => 'object',
                        'properties' => [
                            'card' => [
                                'kind' => 'object',
                                'properties' => [
                                    'commodity_code' => [
                                        'kind' => 'string',
                                        'rules' => [
                                            'maxLength' => 12,
                                        ],
                                    ],
                                ],
                            ],
                            'card_present' => [
                                'kind' => 'object',
                                'properties' => [
                                    'commodity_code' => [
                                        'kind' => 'string',
                                        'rules' => [
                                            'maxLength' => 12,
                                        ],
                                    ],
                                ],
                            ],
                            'klarna' => [
                                'kind' => 'object',
                                'properties' => [
                                    'image_url' => [
                                        'kind' => 'string',
                                        'rules' => [
                                            'maxLength' => 4096,
                                        ],
                                    ],
                                    'product_url' => [
                                        'kind' => 'string',
                                        'rules' => [
                                            'maxLength' => 4096,
                                        ],
                                    ],
                                    'reference' => [
                                        'kind' => 'string',
                                        'rules' => [
                                            'maxLength' => 255,
                                        ],
                                    ],
                                    'subscription_reference' => [
                                        'kind' => 'string',
                                        'rules' => [
                                            'maxLength' => 255,
                                        ],
                                    ],
                                ],
                            ],
                            'paypal' => [
                                'kind' => 'object',
                                'properties' => [
                                    'category' => [
                                        'kind' => 'string',
                                        'enum' => [
                                            'digital_goods',
                                            'donation',
                                            'physical_goods',
                                        ],
                                    ],
                                    'description' => [
                                        'kind' => 'string',
                                        'rules' => [
                                            'maxLength' => 127,
                                        ],
                                    ],
                                    'sold_by' => [
                                        'kind' => 'string',
                                        'rules' => [
                                            'maxLength' => 127,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'product_code' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 12,
                        ],
                    ],
                    'product_name' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 1024,
                        ],
                    ],
                    'quantity' => [
                        'kind' => 'integer',
                    ],
                    'tax' => [
                        'kind' => 'object',
                        'properties' => [
                            'total_tax_amount' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'required' => [
                            'total_tax_amount',
                        ],
                    ],
                    'unit_cost' => [
                        'kind' => 'integer',
                    ],
                    'unit_of_measure' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 12,
                        ],
                    ],
                ],
                'required' => [
                    'product_name',
                    'quantity',
                    'unit_cost',
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
