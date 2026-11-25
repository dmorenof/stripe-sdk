<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\BillingPortal\Session;

final class ConfigurationDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\BillingPortal\Configuration::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
        [
            'kind' => 'reference',
            'ref' => 'billing_portal.configuration',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'application' => [
            'kind' => 'object',
            'properties' => [
                'id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'name' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'application',
                    ],
                ],
            ],
            'required' => [
                'id',
                'object',
            ],
        ],
        'billing.feedback_option' => [
            'kind' => 'object',
            'properties' => [
                'description' => [
                    'kind' => 'string',
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
                'livemode' => [
                    'kind' => 'boolean',
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'billing.feedback_option',
                    ],
                ],
                'status' => [
                    'kind' => 'string',
                    'enum' => [
                        'active',
                        'inactive',
                    ],
                ],
                'status_transitions' => [
                    'kind' => 'reference',
                    'ref' => 'feedback_options_status_transitions',
                ],
            ],
            'required' => [
                'description',
                'id',
                'livemode',
                'object',
                'status',
                'status_transitions',
            ],
        ],
        'billing_portal.configuration' => [
            'kind' => 'object',
            'properties' => [
                'active' => [
                    'kind' => 'boolean',
                ],
                'application' => [
                    'kind' => 'anyOf',
                    'nullable' => true,
                    'branches' => [
                        [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                        [
                            'kind' => 'reference',
                            'ref' => 'application',
                        ],
                        [
                            'kind' => 'reference',
                            'ref' => 'deleted_application',
                        ],
                    ],
                ],
                'business_profile' => [
                    'kind' => 'reference',
                    'ref' => 'portal_business_profile',
                ],
                'created' => [
                    'kind' => 'integer',
                ],
                'default_return_url' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'features' => [
                    'kind' => 'reference',
                    'ref' => 'portal_features',
                ],
                'id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'is_default' => [
                    'kind' => 'boolean',
                ],
                'livemode' => [
                    'kind' => 'boolean',
                ],
                'login_page' => [
                    'kind' => 'reference',
                    'ref' => 'portal_login_page',
                ],
                'metadata' => [
                    'kind' => 'object',
                    'nullable' => true,
                    'additional' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 500,
                        ],
                    ],
                ],
                'name' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'billing_portal.configuration',
                    ],
                ],
                'updated' => [
                    'kind' => 'integer',
                ],
            ],
            'required' => [
                'active',
                'business_profile',
                'created',
                'features',
                'id',
                'is_default',
                'livemode',
                'login_page',
                'object',
                'updated',
            ],
        ],
        'deleted_application' => [
            'kind' => 'object',
            'properties' => [
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
                'name' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'application',
                    ],
                ],
            ],
            'required' => [
                'deleted',
                'id',
                'object',
            ],
        ],
        'feedback_options_status_transitions' => [
            'kind' => 'object',
            'properties' => [
                'deactivated_at' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
            ],
        ],
        'portal_business_profile' => [
            'kind' => 'object',
            'properties' => [
                'headline' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'privacy_policy_url' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'terms_of_service_url' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'portal_customer_update' => [
            'kind' => 'object',
            'properties' => [
                'allowed_updates' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'string',
                        'enum' => [
                            'address',
                            'email',
                            'name',
                            'phone',
                            'shipping',
                            'tax_id',
                        ],
                    ],
                ],
                'enabled' => [
                    'kind' => 'boolean',
                ],
            ],
            'required' => [
                'allowed_updates',
                'enabled',
            ],
        ],
        'portal_features' => [
            'kind' => 'object',
            'properties' => [
                'customer_update' => [
                    'kind' => 'reference',
                    'ref' => 'portal_customer_update',
                ],
                'invoice_history' => [
                    'kind' => 'reference',
                    'ref' => 'portal_invoice_list',
                ],
                'payment_method_update' => [
                    'kind' => 'reference',
                    'ref' => 'portal_payment_method_update',
                ],
                'subscription_cancel' => [
                    'kind' => 'reference',
                    'ref' => 'portal_subscription_cancel',
                ],
                'subscription_update' => [
                    'kind' => 'reference',
                    'ref' => 'portal_subscription_update',
                ],
            ],
            'required' => [
                'customer_update',
                'invoice_history',
                'payment_method_update',
                'subscription_cancel',
                'subscription_update',
            ],
        ],
        'portal_invoice_list' => [
            'kind' => 'object',
            'properties' => [
                'enabled' => [
                    'kind' => 'boolean',
                ],
            ],
            'required' => [
                'enabled',
            ],
        ],
        'portal_login_page' => [
            'kind' => 'object',
            'properties' => [
                'enabled' => [
                    'kind' => 'boolean',
                ],
                'url' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
            'required' => [
                'enabled',
            ],
        ],
        'portal_payment_method_update' => [
            'kind' => 'object',
            'properties' => [
                'enabled' => [
                    'kind' => 'boolean',
                ],
                'payment_method_configuration' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
            'required' => [
                'enabled',
            ],
        ],
        'portal_resource_schedule_update_at_period_end' => [
            'kind' => 'object',
            'properties' => [
                'conditions' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'portal_resource_schedule_update_at_period_end_condition',
                    ],
                ],
            ],
            'required' => [
                'conditions',
            ],
        ],
        'portal_resource_schedule_update_at_period_end_condition' => [
            'kind' => 'object',
            'properties' => [
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'decreasing_item_amount',
                        'shortening_interval',
                    ],
                ],
            ],
            'required' => [
                'type',
            ],
        ],
        'portal_subscription_cancel' => [
            'kind' => 'object',
            'properties' => [
                'cancellation_reason' => [
                    'kind' => 'reference',
                    'ref' => 'portal_subscription_cancellation_reason',
                ],
                'enabled' => [
                    'kind' => 'boolean',
                ],
                'mode' => [
                    'kind' => 'string',
                    'enum' => [
                        'at_period_end',
                        'immediately',
                    ],
                ],
                'proration_behavior' => [
                    'kind' => 'string',
                    'enum' => [
                        'always_invoice',
                        'create_prorations',
                        'none',
                    ],
                ],
            ],
            'required' => [
                'cancellation_reason',
                'enabled',
                'mode',
                'proration_behavior',
            ],
        ],
        'portal_subscription_cancellation_reason' => [
            'kind' => 'object',
            'properties' => [
                'enabled' => [
                    'kind' => 'boolean',
                ],
                'feedback_options' => [
                    'kind' => 'array',
                    'nullable' => true,
                    'items' => [
                        'kind' => 'anyOf',
                        'branches' => [
                            [
                                'kind' => 'string',
                                'rules' => [
                                    'maxLength' => 5000,
                                ],
                            ],
                            [
                                'kind' => 'reference',
                                'ref' => 'billing.feedback_option',
                            ],
                        ],
                    ],
                ],
                'options' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'string',
                        'enum' => [
                            'customer_service',
                            'low_quality',
                            'missing_features',
                            'other',
                            'switched_service',
                            'too_complex',
                            'too_expensive',
                            'unused',
                        ],
                    ],
                ],
            ],
            'required' => [
                'enabled',
                'options',
            ],
        ],
        'portal_subscription_update' => [
            'kind' => 'object',
            'properties' => [
                'billing_cycle_anchor' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'now',
                        'unchanged',
                    ],
                ],
                'default_allowed_updates' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'string',
                        'enum' => [
                            'price',
                            'promotion_code',
                            'quantity',
                        ],
                    ],
                ],
                'enabled' => [
                    'kind' => 'boolean',
                ],
                'products' => [
                    'kind' => 'array',
                    'nullable' => true,
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'portal_subscription_update_product',
                    ],
                ],
                'proration_behavior' => [
                    'kind' => 'string',
                    'enum' => [
                        'always_invoice',
                        'create_prorations',
                        'none',
                    ],
                ],
                'schedule_at_period_end' => [
                    'kind' => 'reference',
                    'ref' => 'portal_resource_schedule_update_at_period_end',
                ],
                'trial_update_behavior' => [
                    'kind' => 'string',
                    'enum' => [
                        'continue_trial',
                        'end_trial',
                    ],
                ],
            ],
            'required' => [
                'default_allowed_updates',
                'enabled',
                'proration_behavior',
                'schedule_at_period_end',
                'trial_update_behavior',
            ],
        ],
        'portal_subscription_update_product' => [
            'kind' => 'object',
            'properties' => [
                'adjustable_quantity' => [
                    'kind' => 'reference',
                    'ref' => 'portal_subscription_update_product_adjustable_quantity',
                ],
                'prices' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 5000,
                        ],
                    ],
                ],
                'product' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
            'required' => [
                'adjustable_quantity',
                'prices',
                'product',
            ],
        ],
        'portal_subscription_update_product_adjustable_quantity' => [
            'kind' => 'object',
            'properties' => [
                'enabled' => [
                    'kind' => 'boolean',
                ],
                'maximum' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'minimum' => [
                    'kind' => 'integer',
                ],
            ],
            'required' => [
                'enabled',
                'minimum',
            ],
        ],
    ];
}
