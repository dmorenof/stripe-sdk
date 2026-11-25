<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Disputes\ByDispute\Post\Evidence;

final class EvidenceCanceledRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\EvidenceCanceledRequest2Variant1\Request2Variant1Request::class, \StripeSDK\Enums\EvidenceCanceledRequest2Variant2\Request2Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'additional_documentation' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'string',
                        ],
                        [
                            'kind' => 'string',
                            'enum' => [
                                '',
                            ],
                        ],
                    ],
                ],
                'canceled_at' => [
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
                'cancellation_policy_provided' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'boolean',
                        ],
                        [
                            'kind' => 'string',
                            'enum' => [
                                '',
                            ],
                        ],
                    ],
                ],
                'cancellation_reason' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 2500,
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
                'expected_at' => [
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
                'explanation' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 2500,
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
                'product_description' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 2500,
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
                'product_type' => [
                    'kind' => 'string',
                    'enum' => [
                        '',
                        'merchandise',
                        'service',
                    ],
                ],
                'return_status' => [
                    'kind' => 'string',
                    'enum' => [
                        '',
                        'merchant_rejected',
                        'successful',
                    ],
                ],
                'returned_at' => [
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
