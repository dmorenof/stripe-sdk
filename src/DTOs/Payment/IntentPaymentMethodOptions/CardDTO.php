<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment\IntentPaymentMethodOptions;

final class CardDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\DTOs\Payment\IntentPaymentMethodOptionsCard::class, \StripeSDK\DTOs\Payment\IntentTypeSpecificPaymentMethodOptionsClient::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'payment_intent_payment_method_options_card',
        ],
        [
            'kind' => 'reference',
            'ref' => 'payment_intent_type_specific_payment_method_options_client',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'payment_flows_installment_options' => [
            'kind' => 'object',
            'properties' => [
                'enabled' => [
                    'kind' => 'boolean',
                ],
                'plan' => [
                    'kind' => 'reference',
                    'ref' => 'payment_method_details_card_installments_plan',
                ],
            ],
            'required' => [
                'enabled',
            ],
        ],
        'payment_intent_payment_method_options_card' => [
            'kind' => 'object',
            'properties' => [
                'capture_method' => [
                    'kind' => 'string',
                    'enum' => [
                        'manual',
                    ],
                ],
                'installments' => [
                    'kind' => 'reference',
                    'ref' => 'payment_method_options_card_installments',
                ],
                'mandate_options' => [
                    'kind' => 'reference',
                    'ref' => 'payment_method_options_card_mandate_options',
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
                'request_extended_authorization' => [
                    'kind' => 'string',
                    'enum' => [
                        'if_available',
                        'never',
                    ],
                ],
                'request_incremental_authorization' => [
                    'kind' => 'string',
                    'enum' => [
                        'if_available',
                        'never',
                    ],
                ],
                'request_multicapture' => [
                    'kind' => 'string',
                    'enum' => [
                        'if_available',
                        'never',
                    ],
                ],
                'request_overcapture' => [
                    'kind' => 'string',
                    'enum' => [
                        'if_available',
                        'never',
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
                'require_cvc_recollection' => [
                    'kind' => 'boolean',
                ],
                'setup_future_usage' => [
                    'kind' => 'string',
                    'enum' => [
                        'none',
                        'off_session',
                        'on_session',
                    ],
                ],
                'statement_descriptor_suffix_kana' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'statement_descriptor_suffix_kanji' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'payment_intent_payment_method_options_mandate_options_payto' => [
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
            ],
        ],
        'payment_intent_type_specific_payment_method_options_client' => [
            'kind' => 'object',
            'properties' => [
                'capture_method' => [
                    'kind' => 'string',
                    'enum' => [
                        'automatic_delayed',
                        'manual',
                        'manual_preferred',
                    ],
                ],
                'installments' => [
                    'kind' => 'reference',
                    'ref' => 'payment_flows_installment_options',
                ],
                'mandate_options' => [
                    'kind' => 'reference',
                    'ref' => 'payment_intent_payment_method_options_mandate_options_payto',
                ],
                'request_incremental_authorization_support' => [
                    'kind' => 'boolean',
                ],
                'require_cvc_recollection' => [
                    'kind' => 'boolean',
                ],
                'routing' => [
                    'kind' => 'reference',
                    'ref' => 'payment_method_options_card_present_routing',
                ],
                'setup_future_usage' => [
                    'kind' => 'string',
                    'enum' => [
                        'none',
                        'off_session',
                        'on_session',
                    ],
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
        'payment_method_details_card_installments_plan' => [
            'kind' => 'object',
            'properties' => [
                'count' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'interval' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'month',
                    ],
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'bonus',
                        'fixed_count',
                        'revolving',
                    ],
                ],
            ],
            'required' => [
                'type',
            ],
        ],
        'payment_method_options_card_installments' => [
            'kind' => 'object',
            'properties' => [
                'available_plans' => [
                    'kind' => 'array',
                    'nullable' => true,
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'payment_method_details_card_installments_plan',
                    ],
                ],
                'enabled' => [
                    'kind' => 'boolean',
                ],
                'plan' => [
                    'kind' => 'reference',
                    'ref' => 'payment_method_details_card_installments_plan',
                ],
            ],
            'required' => [
                'enabled',
            ],
        ],
        'payment_method_options_card_mandate_options' => [
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
                'interval',
                'reference',
                'start_date',
            ],
        ],
        'payment_method_options_card_present_routing' => [
            'kind' => 'object',
            'properties' => [
                'requested_priority' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'domestic',
                        'international',
                    ],
                ],
            ],
        ],
    ];
}
