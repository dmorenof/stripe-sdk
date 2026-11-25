<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment\IntentPaymentMethodOptions;

final class BillieDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\DTOs\Payment\MethodOptionsBillie::class, \StripeSDK\DTOs\Payment\IntentTypeSpecificPaymentMethodOptionsClient::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'payment_method_options_billie',
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
        'payment_flows_private_payment_methods_billie_payment_method_options_resource_company_details' => [
            'kind' => 'object',
            'properties' => [
                'registered_address' => [
                    'kind' => 'reference',
                    'ref' => 'payment_flows_private_payment_methods_billie_payment_method_options_resource_company_details_resource_company_details_registered_address',
                ],
                'registered_name' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'registration_number' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'registration_type' => [
                    'kind' => 'string',
                    'enum' => [
                        'ch_ein',
                        'de_hrb',
                        'dk_cvr',
                        'es_cif',
                        'fi_tunnus',
                        'fr_siren',
                        'fr_siret',
                        'it_rea',
                        'nl_kvk',
                        'no_org_number',
                        'no_pno',
                        'se_org_number',
                        'se_pno',
                        'uk_crn',
                    ],
                ],
                'vat' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'payment_flows_private_payment_methods_billie_payment_method_options_resource_company_details_resource_company_details_registered_address' => [
            'kind' => 'object',
            'properties' => [
                'city' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'country' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'line1' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'line2' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'postal_code' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'state' => [
                    'kind' => 'string',
                    'nullable' => true,
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
        'payment_method_options_billie' => [
            'kind' => 'object',
            'properties' => [
                'capture_method' => [
                    'kind' => 'string',
                    'enum' => [
                        'manual',
                    ],
                ],
                'company_details' => [
                    'kind' => 'reference',
                    'ref' => 'payment_flows_private_payment_methods_billie_payment_method_options_resource_company_details',
                ],
                'reference' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
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
