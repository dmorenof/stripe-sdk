<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post;

final class AmountDetailsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\AmountDetailsRequest2Variant1\Request2Variant1Request::class, \StripeSDK\Enums\AmountDetailsRequest2Variant2\Request2Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'discount_amount' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'integer',
                        ],
                        [
                            'kind' => 'string',
                            'enum' => [
                                '',
                            ],
                        ],
                    ],
                ],
                'enforce_arithmetic_validation' => [
                    'kind' => 'boolean',
                ],
                'line_items' => [
                    'kind' => 'anyOf',
                    'branches' => [
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
                    ],
                ],
                'shipping' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'object',
                            'properties' => [
                                'amount' => [
                                    'kind' => 'anyOf',
                                    'branches' => [
                                        [
                                            'kind' => 'integer',
                                        ],
                                        [
                                            'kind' => 'string',
                                            'enum' => [
                                                '',
                                            ],
                                        ],
                                    ],
                                ],
                                'from_postal_code' => [
                                    'kind' => 'anyOf',
                                    'branches' => [
                                        [
                                            'kind' => 'string',
                                            'rules' => [
                                                'maxLength' => 10,
                                            ],
                                        ],
                                        [
                                            'kind' => 'string',
                                            'enum' => [
                                                '',
                                            ],
                                        ],
                                    ],
                                ],
                                'to_postal_code' => [
                                    'kind' => 'anyOf',
                                    'branches' => [
                                        [
                                            'kind' => 'string',
                                            'rules' => [
                                                'maxLength' => 10,
                                            ],
                                        ],
                                        [
                                            'kind' => 'string',
                                            'enum' => [
                                                '',
                                            ],
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
                    ],
                ],
                'tax' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
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
                        [
                            'kind' => 'string',
                            'enum' => [
                                '',
                            ],
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
