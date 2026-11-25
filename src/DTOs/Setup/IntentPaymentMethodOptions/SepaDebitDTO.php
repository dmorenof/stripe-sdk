<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup\IntentPaymentMethodOptions;

final class SepaDebitDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\DTOs\Setup\IntentPaymentMethodOptionsSepaDebit::class, \StripeSDK\DTOs\Setup\IntentTypeSpecificPaymentMethodOptionsClient::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'setup_intent_payment_method_options_sepa_debit',
        ],
        [
            'kind' => 'reference',
            'ref' => 'setup_intent_type_specific_payment_method_options_client',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
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
        'setup_intent_payment_method_options_mandate_options_sepa_debit' => [
            'kind' => 'object',
            'properties' => [
                'reference_prefix' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'setup_intent_payment_method_options_sepa_debit' => [
            'kind' => 'object',
            'properties' => [
                'mandate_options' => [
                    'kind' => 'reference',
                    'ref' => 'setup_intent_payment_method_options_mandate_options_sepa_debit',
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
