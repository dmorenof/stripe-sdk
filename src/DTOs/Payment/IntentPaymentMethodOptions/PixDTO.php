<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment\IntentPaymentMethodOptions;

final class PixDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\DTOs\Payment\MethodOptionsPix::class, \StripeSDK\DTOs\Payment\IntentTypeSpecificPaymentMethodOptionsClient::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'payment_method_options_pix',
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
        'payment_method_options_pix' => [
            'kind' => 'object',
            'properties' => [
                'amount_includes_iof' => [
                    'kind' => 'string',
                    'enum' => [
                        'always',
                        'never',
                    ],
                ],
                'expires_after_seconds' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'expires_at' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'mandate_options' => [
                    'kind' => 'reference',
                    'ref' => 'payment_method_options_mandate_options_pix',
                ],
                'setup_future_usage' => [
                    'kind' => 'string',
                    'enum' => [
                        'none',
                        'off_session',
                    ],
                ],
            ],
        ],
    ];
}
