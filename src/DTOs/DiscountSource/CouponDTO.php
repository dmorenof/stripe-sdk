<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\DiscountSource;

final class CouponDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\Coupon::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
        [
            'kind' => 'reference',
            'ref' => 'coupon',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'coupon' => [
            'kind' => 'object',
            'properties' => [
                'amount_off' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'applies_to' => [
                    'kind' => 'reference',
                    'ref' => 'coupon_applies_to',
                ],
                'created' => [
                    'kind' => 'integer',
                ],
                'currency' => [
                    'kind' => 'string',
                    'nullable' => true,
                ],
                'currency_options' => [
                    'kind' => 'object',
                    'additional' => [
                        'kind' => 'reference',
                        'ref' => 'coupon_currency_option',
                    ],
                ],
                'duration' => [
                    'kind' => 'string',
                    'enum' => [
                        'forever',
                        'once',
                        'repeating',
                    ],
                ],
                'duration_in_months' => [
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
                'max_redemptions' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'metadata' => [
                    'kind' => 'object',
                    'nullable' => true,
                    'additional' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 500,
                        ],
                    ],
                ],
                'name' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'coupon',
                    ],
                ],
                'percent_off' => [
                    'kind' => 'number',
                    'nullable' => true,
                ],
                'redeem_by' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'times_redeemed' => [
                    'kind' => 'integer',
                ],
                'valid' => [
                    'kind' => 'boolean',
                ],
            ],
            'required' => [
                'created',
                'duration',
                'id',
                'livemode',
                'object',
                'times_redeemed',
                'valid',
            ],
        ],
        'coupon_applies_to' => [
            'kind' => 'object',
            'properties' => [
                'products' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 5000,
                        ],
                    ],
                ],
            ],
            'required' => [
                'products',
            ],
        ],
        'coupon_currency_option' => [
            'kind' => 'object',
            'properties' => [
                'amount_off' => [
                    'kind' => 'integer',
                ],
            ],
            'required' => [
                'amount_off',
            ],
        ],
    ];
}
