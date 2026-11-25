<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Deleted;

final class AnyOfPaymentSource extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\DTOs\Deleted\BankAccount::class, \StripeSDK\DTOs\Deleted\Card::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'deleted_bank_account',
        ],
        [
            'kind' => 'reference',
            'ref' => 'deleted_card',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'deleted_bank_account' => [
            'kind' => 'object',
            'properties' => [
                'currency' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
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
                        'bank_account',
                    ],
                ],
            ],
            'required' => [
                'deleted',
                'id',
                'object',
            ],
        ],
        'deleted_card' => [
            'kind' => 'object',
            'properties' => [
                'currency' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
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
                        'card',
                    ],
                ],
            ],
            'required' => [
                'deleted',
                'id',
                'object',
            ],
        ],
    ];
}
