<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ThresholdsResourceUsageThresholdConfig;

final class MeterDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\Billing\Meter::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
        [
            'kind' => 'reference',
            'ref' => 'billing.meter',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'billing.meter' => [
            'kind' => 'object',
            'properties' => [
                'created' => [
                    'kind' => 'integer',
                ],
                'customer_mapping' => [
                    'kind' => 'reference',
                    'ref' => 'billing_meter_resource_customer_mapping_settings',
                ],
                'default_aggregation' => [
                    'kind' => 'reference',
                    'ref' => 'billing_meter_resource_aggregation_settings',
                ],
                'display_name' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'event_name' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'event_time_window' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'day',
                        'hour',
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
                        'billing.meter',
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
                    'ref' => 'billing_meter_resource_billing_meter_status_transitions',
                ],
                'updated' => [
                    'kind' => 'integer',
                ],
                'value_settings' => [
                    'kind' => 'reference',
                    'ref' => 'billing_meter_resource_billing_meter_value',
                ],
            ],
            'required' => [
                'created',
                'customer_mapping',
                'default_aggregation',
                'display_name',
                'event_name',
                'id',
                'livemode',
                'object',
                'status',
                'status_transitions',
                'updated',
                'value_settings',
            ],
        ],
        'billing_meter_resource_aggregation_settings' => [
            'kind' => 'object',
            'properties' => [
                'formula' => [
                    'kind' => 'string',
                    'enum' => [
                        'count',
                        'last',
                        'sum',
                    ],
                ],
            ],
            'required' => [
                'formula',
            ],
        ],
        'billing_meter_resource_billing_meter_status_transitions' => [
            'kind' => 'object',
            'properties' => [
                'deactivated_at' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
            ],
        ],
        'billing_meter_resource_billing_meter_value' => [
            'kind' => 'object',
            'properties' => [
                'event_payload_key' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
            'required' => [
                'event_payload_key',
            ],
        ],
        'billing_meter_resource_customer_mapping_settings' => [
            'kind' => 'object',
            'properties' => [
                'event_payload_key' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'by_id',
                    ],
                ],
            ],
            'required' => [
                'event_payload_key',
                'type',
            ],
        ],
    ];
}
