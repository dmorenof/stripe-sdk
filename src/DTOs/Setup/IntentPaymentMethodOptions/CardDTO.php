<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup\IntentPaymentMethodOptions;

final class CardDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\DTOs\Setup\IntentPaymentMethodOptionsCard::class, \StripeSDK\DTOs\Setup\IntentTypeSpecificPaymentMethodOptionsClient::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'setup_intent_payment_method_options_card',
        ],
        [
            'kind' => 'reference',
            'ref' => 'setup_intent_type_specific_payment_method_options_client',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'setup_intent_payment_method_options_card' => [
            'kind' => 'object',
            'properties' => [
                'mandate_options' => [
                    'kind' => 'reference',
                    'ref' => 'setup_intent_payment_method_options_card_mandate_options',
                ],
                'network' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'amex',
                        'cartes_bancaires',
                        'diners',
                        'discover',
                        'eftpos_au',
                        'girocard',
                        'interac',
                        'jcb',
                        'link',
                        'mastercard',
                        'unionpay',
                        'unknown',
                        'visa',
                    ],
                ],
                'request_three_d_secure' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'any',
                        'automatic',
                        'challenge',
                    ],
                ],
            ],
        ],
        'setup_intent_payment_method_options_card_mandate_options' => [
            'kind' => 'object',
            'properties' => [
                'amount' => [
                    'kind' => 'integer',
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
                'description' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 200,
                    ],
                ],
                'end_date' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'interval' => [
                    'kind' => 'string',
                    'enum' => [
                        'day',
                        'month',
                        'sporadic',
                        'week',
                        'year',
                    ],
                ],
                'interval_count' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'reference' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 80,
                    ],
                ],
                'start_date' => [
                    'kind' => 'integer',
                ],
                'supported_types' => [
                    'kind' => 'array',
                    'nullable' => true,
                    'items' => [
                        'kind' => 'string',
                        'enum' => [
                            'india',
                        ],
                    ],
                ],
            ],
            'required' => [
                'amount',
                'amount_type',
                'currency',
                'interval',
                'reference',
                'start_date',
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
