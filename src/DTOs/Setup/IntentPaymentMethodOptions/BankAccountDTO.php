<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup\IntentPaymentMethodOptions;

final class BankAccountDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\DTOs\Setup\IntentPaymentMethodOptionsUsBankAccount::class, \StripeSDK\DTOs\Setup\IntentTypeSpecificPaymentMethodOptionsClient::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'setup_intent_payment_method_options_us_bank_account',
        ],
        [
            'kind' => 'reference',
            'ref' => 'setup_intent_type_specific_payment_method_options_client',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'linked_account_options_common' => [
            'kind' => 'object',
            'properties' => [
                'filters' => [
                    'kind' => 'reference',
                    'ref' => 'payment_flows_private_payment_methods_financial_connections_common_linked_account_options_filters',
                ],
                'permissions' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'string',
                        'enum' => [
                            'balances',
                            'ownership',
                            'payment_method',
                            'transactions',
                        ],
                    ],
                ],
                'prefetch' => [
                    'kind' => 'array',
                    'nullable' => true,
                    'items' => [
                        'kind' => 'string',
                        'enum' => [
                            'balances',
                            'ownership',
                            'transactions',
                        ],
                    ],
                ],
                'return_url' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'payment_flows_private_payment_methods_financial_connections_common_linked_account_options_filters' => [
            'kind' => 'object',
            'properties' => [
                'account_subcategories' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'string',
                        'enum' => [
                            'checking',
                            'savings',
                        ],
                    ],
                ],
            ],
        ],
        'payment_method_options_us_bank_account_mandate_options' => [
            'kind' => 'object',
            'properties' => [
                'collection_method' => [
                    'kind' => 'string',
                    'enum' => [
                        'paper',
                    ],
                ],
            ],
        ],
        'setup_intent_payment_method_options_mandate_options_payto' => [
            'kind' => 'object',
            'properties' => [
                'amount' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'amount_type' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'fixed',
                        'maximum',
                    ],
                ],
                'end_date' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'payment_schedule' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'adhoc',
                        'annual',
                        'daily',
                        'fortnightly',
                        'monthly',
                        'quarterly',
                        'semi_annual',
                        'weekly',
                    ],
                ],
                'payments_per_period' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'purpose' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'dependant_support',
                        'government',
                        'loan',
                        'mortgage',
                        'other',
                        'pension',
                        'personal',
                        'retail',
                        'salary',
                        'tax',
                        'utility',
                    ],
                ],
                'start_date' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'setup_intent_payment_method_options_us_bank_account' => [
            'kind' => 'object',
            'properties' => [
                'financial_connections' => [
                    'kind' => 'reference',
                    'ref' => 'linked_account_options_common',
                ],
                'mandate_options' => [
                    'kind' => 'reference',
                    'ref' => 'payment_method_options_us_bank_account_mandate_options',
                ],
                'verification_method' => [
                    'kind' => 'string',
                    'enum' => [
                        'automatic',
                        'instant',
                        'microdeposits',
                    ],
                ],
            ],
        ],
        'setup_intent_type_specific_payment_method_options_client' => [
            'kind' => 'object',
            'properties' => [
                'mandate_options' => [
                    'kind' => 'reference',
                    'ref' => 'setup_intent_payment_method_options_mandate_options_payto',
                ],
                'verification_method' => [
                    'kind' => 'string',
                    'enum' => [
                        'automatic',
                        'instant',
                        'microdeposits',
                    ],
                ],
            ],
        ],
    ];
}
