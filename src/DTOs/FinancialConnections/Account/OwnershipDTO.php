<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\FinancialConnections\Account;

final class OwnershipDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\FinancialConnections\AccountOwnership::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
        [
            'kind' => 'reference',
            'ref' => 'financial_connections.account_ownership',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'financial_connections.account_owner' => [
            'kind' => 'object',
            'properties' => [
                'email' => [
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
                'name' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'financial_connections.account_owner',
                    ],
                ],
                'ownership' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'phone' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'raw_address' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'refreshed_at' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
            ],
            'required' => [
                'id',
                'name',
                'object',
                'ownership',
            ],
        ],
        'financial_connections.account_ownership' => [
            'kind' => 'object',
            'properties' => [
                'created' => [
                    'kind' => 'integer',
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
                        'financial_connections.account_ownership',
                    ],
                ],
                'owners' => [
                    'kind' => 'object',
                    'properties' => [
                        'data' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'reference',
                                'ref' => 'financial_connections.account_owner',
                            ],
                        ],
                        'has_more' => [
                            'kind' => 'boolean',
                        ],
                        'object' => [
                            'kind' => 'string',
                            'enum' => [
                                'list',
                            ],
                        ],
                        'url' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                    ],
                    'required' => [
                        'data',
                        'has_more',
                        'object',
                        'url',
                    ],
                ],
            ],
            'required' => [
                'created',
                'id',
                'object',
                'owners',
            ],
        ],
    ];
}
