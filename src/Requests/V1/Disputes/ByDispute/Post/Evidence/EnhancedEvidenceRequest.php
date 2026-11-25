<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Disputes\ByDispute\Post\Evidence;

final class EnhancedEvidenceRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\EnhancedEvidenceRequest2Variant1\Request2Variant1Request::class, \StripeSDK\Enums\EnhancedEvidenceRequest2Variant2\Request2Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'mastercard_compliance' => [
                    'kind' => 'object',
                    'properties' => [
                        'fee_acknowledged' => [
                            'kind' => 'boolean',
                        ],
                    ],
                ],
                'visa_compelling_evidence_3' => [
                    'kind' => 'object',
                    'properties' => [
                        'disputed_transaction' => [
                            'kind' => 'object',
                            'properties' => [
                                'customer_account_id' => [
                                    'kind' => 'anyOf',
                                    'branches' => [
                                        [
                                            'kind' => 'string',
                                            'rules' => [
                                                'maxLength' => 5000,
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
                                'customer_device_fingerprint' => [
                                    'kind' => 'anyOf',
                                    'branches' => [
                                        [
                                            'kind' => 'string',
                                            'rules' => [
                                                'maxLength' => 5000,
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
                                'customer_device_id' => [
                                    'kind' => 'anyOf',
                                    'branches' => [
                                        [
                                            'kind' => 'string',
                                            'rules' => [
                                                'maxLength' => 5000,
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
                                'customer_email_address' => [
                                    'kind' => 'anyOf',
                                    'branches' => [
                                        [
                                            'kind' => 'string',
                                            'rules' => [
                                                'maxLength' => 5000,
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
                                'customer_purchase_ip' => [
                                    'kind' => 'anyOf',
                                    'branches' => [
                                        [
                                            'kind' => 'string',
                                            'rules' => [
                                                'maxLength' => 5000,
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
                                'merchandise_or_services' => [
                                    'kind' => 'string',
                                    'enum' => [
                                        'merchandise',
                                        'services',
                                    ],
                                ],
                                'product_description' => [
                                    'kind' => 'anyOf',
                                    'branches' => [
                                        [
                                            'kind' => 'string',
                                            'rules' => [
                                                'maxLength' => 5000,
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
                                'shipping_address' => [
                                    'kind' => 'object',
                                    'properties' => [
                                        'city' => [
                                            'kind' => 'anyOf',
                                            'branches' => [
                                                [
                                                    'kind' => 'string',
                                                    'rules' => [
                                                        'maxLength' => 5000,
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
                                        'country' => [
                                            'kind' => 'anyOf',
                                            'branches' => [
                                                [
                                                    'kind' => 'string',
                                                    'rules' => [
                                                        'maxLength' => 5000,
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
                                        'line1' => [
                                            'kind' => 'anyOf',
                                            'branches' => [
                                                [
                                                    'kind' => 'string',
                                                    'rules' => [
                                                        'maxLength' => 5000,
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
                                        'line2' => [
                                            'kind' => 'anyOf',
                                            'branches' => [
                                                [
                                                    'kind' => 'string',
                                                    'rules' => [
                                                        'maxLength' => 5000,
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
                                        'postal_code' => [
                                            'kind' => 'anyOf',
                                            'branches' => [
                                                [
                                                    'kind' => 'string',
                                                    'rules' => [
                                                        'maxLength' => 5000,
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
                                        'state' => [
                                            'kind' => 'anyOf',
                                            'branches' => [
                                                [
                                                    'kind' => 'string',
                                                    'rules' => [
                                                        'maxLength' => 5000,
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
                            ],
                        ],
                        'prior_undisputed_transactions' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'object',
                                'properties' => [
                                    'charge' => [
                                        'kind' => 'string',
                                        'rules' => [
                                            'maxLength' => 5000,
                                        ],
                                    ],
                                    'customer_account_id' => [
                                        'kind' => 'anyOf',
                                        'branches' => [
                                            [
                                                'kind' => 'string',
                                                'rules' => [
                                                    'maxLength' => 5000,
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
                                    'customer_device_fingerprint' => [
                                        'kind' => 'anyOf',
                                        'branches' => [
                                            [
                                                'kind' => 'string',
                                                'rules' => [
                                                    'maxLength' => 5000,
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
                                    'customer_device_id' => [
                                        'kind' => 'anyOf',
                                        'branches' => [
                                            [
                                                'kind' => 'string',
                                                'rules' => [
                                                    'maxLength' => 5000,
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
                                    'customer_email_address' => [
                                        'kind' => 'anyOf',
                                        'branches' => [
                                            [
                                                'kind' => 'string',
                                                'rules' => [
                                                    'maxLength' => 5000,
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
                                    'customer_purchase_ip' => [
                                        'kind' => 'anyOf',
                                        'branches' => [
                                            [
                                                'kind' => 'string',
                                                'rules' => [
                                                    'maxLength' => 5000,
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
                                                    'maxLength' => 5000,
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
                                    'shipping_address' => [
                                        'kind' => 'object',
                                        'properties' => [
                                            'city' => [
                                                'kind' => 'anyOf',
                                                'branches' => [
                                                    [
                                                        'kind' => 'string',
                                                        'rules' => [
                                                            'maxLength' => 5000,
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
                                            'country' => [
                                                'kind' => 'anyOf',
                                                'branches' => [
                                                    [
                                                        'kind' => 'string',
                                                        'rules' => [
                                                            'maxLength' => 5000,
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
                                            'line1' => [
                                                'kind' => 'anyOf',
                                                'branches' => [
                                                    [
                                                        'kind' => 'string',
                                                        'rules' => [
                                                            'maxLength' => 5000,
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
                                            'line2' => [
                                                'kind' => 'anyOf',
                                                'branches' => [
                                                    [
                                                        'kind' => 'string',
                                                        'rules' => [
                                                            'maxLength' => 5000,
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
                                            'postal_code' => [
                                                'kind' => 'anyOf',
                                                'branches' => [
                                                    [
                                                        'kind' => 'string',
                                                        'rules' => [
                                                            'maxLength' => 5000,
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
                                            'state' => [
                                                'kind' => 'anyOf',
                                                'branches' => [
                                                    [
                                                        'kind' => 'string',
                                                        'rules' => [
                                                            'maxLength' => 5000,
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
                                ],
                                'required' => [
                                    'charge',
                                ],
                            ],
                        ],
                    ],
                ],
                'visa_compliance' => [
                    'kind' => 'object',
                    'properties' => [
                        'fee_acknowledged' => [
                            'kind' => 'boolean',
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
