<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup\IntentPaymentMethodOptions;

final class PixDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\DTOs\Setup\IntentPaymentMethodOptionsPix::class, \StripeSDK\DTOs\Setup\IntentTypeSpecificPaymentMethodOptionsClient::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'setup_intent_payment_method_options_pix',
        ],
        [
            'kind' => 'reference',
            'ref' => 'setup_intent_type_specific_payment_method_options_client',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'payment_method_options_mandate_options_pix' => [
            'kind' => 'object',
            'properties' => [
                'amount' => [
                    'kind' => 'integer',
                ],
                'amount_includes_iof' => [
                    'kind' => 'string',
                    'enum' => [
                        'always',
                        'never',
                    ],
                ],
                'amount_type' => [
                    'kind' => 'string',
                    'enum' => [
                        'fixed',
                        'maximum',
                    ],
                ],
                'currency' => [
                    'kind' => 'string',
                ],
                'end_date' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'payment_schedule' => [
                    'kind' => 'string',
                    'enum' => [
                        'halfyearly',
                        'monthly',
                        'quarterly',
                        'weekly',
                        'yearly',
                    ],
                ],
                'reference' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'start_date' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
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
        'setup_intent_payment_method_options_pix' => [
            'kind' => 'object',
            'properties' => [
                'mandate_options' => [
                    'kind' => 'reference',
                    'ref' => 'payment_method_options_mandate_options_pix',
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
