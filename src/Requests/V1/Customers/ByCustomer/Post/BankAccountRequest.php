<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\Post;

final class BankAccountRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\Request4Variant1Request::class, 'string'];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'account_holder_name' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'account_holder_type' => [
                    'kind' => 'string',
                    'enum' => [
                        'company',
                        'individual',
                    ],
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'account_number' => [
                    'kind' => 'string',
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
                'currency' => [
                    'kind' => 'string',
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'bank_account',
                    ],
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'routing_number' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
            'required' => [
                'account_number',
                'country',
            ],
        ],
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
