<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Configurations\Post;

final class ConfigurationsTippingRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\TippingVariant1Request::class, \StripeSDK\Enums\TippingVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'aed' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'aud' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'cad' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'chf' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'czk' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'dkk' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'eur' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'gbp' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'gip' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'hkd' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'huf' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'jpy' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'mxn' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'myr' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'nok' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'nzd' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'pln' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'ron' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'sek' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'sgd' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'usd' => [
                    'kind' => 'object',
                    'properties' => [
                        'fixed_amounts' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'percentages' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'smart_tip_threshold' => [
                            'kind' => 'integer',
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
