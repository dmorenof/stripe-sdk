<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post;

final class PauseSchedulesRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\PauseSchedulesRequestVariant1Array\SchedulesVariant1Collection::class, \StripeSDK\Enums\PauseSchedulesRequestVariant2\SchedulesVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'object',
                'properties' => [
                    'key' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 40,
                        ],
                    ],
                    'pause' => [
                        'kind' => 'object',
                        'properties' => [
                            'pause_at' => [
                                'kind' => 'object',
                                'properties' => [
                                    'timestamp' => [
                                        'kind' => 'integer',
                                    ],
                                    'type' => [
                                        'kind' => 'string',
                                        'enum' => [
                                            'now',
                                            'timestamp',
                                        ],
                                    ],
                                ],
                                'required' => [
                                    'type',
                                ],
                            ],
                            'settings' => [
                                'kind' => 'object',
                                'properties' => [
                                    'bill_for' => [
                                        'kind' => 'object',
                                        'properties' => [
                                            'outstanding_usage_through' => [
                                                'kind' => 'object',
                                                'properties' => [
                                                    'type' => [
                                                        'kind' => 'string',
                                                        'enum' => [
                                                            'none',
                                                            'pause_at',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'unused_time_from' => [
                                                'kind' => 'object',
                                                'properties' => [
                                                    'type' => [
                                                        'kind' => 'string',
                                                        'enum' => [
                                                            'item_current_period_start',
                                                            'none',
                                                            'pause_at',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'invoicing_behavior' => [
                                        'kind' => 'string',
                                        'enum' => [
                                            'invoice',
                                            'pending_invoice_item',
                                        ],
                                    ],
                                    'type' => [
                                        'kind' => 'string',
                                        'enum' => [
                                            'subscription',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'resume' => [
                        'kind' => 'anyOf',
                        'branches' => [
                            [
                                'kind' => 'object',
                                'properties' => [
                                    'resume_at' => [
                                        'kind' => 'object',
                                        'properties' => [
                                            'duration' => [
                                                'kind' => 'object',
                                                'properties' => [
                                                    'interval' => [
                                                        'kind' => 'string',
                                                        'enum' => [
                                                            'day',
                                                            'month',
                                                            'week',
                                                            'year',
                                                        ],
                                                    ],
                                                    'interval_count' => [
                                                        'kind' => 'integer',
                                                    ],
                                                ],
                                                'required' => [
                                                    'interval',
                                                ],
                                            ],
                                            'timestamp' => [
                                                'kind' => 'integer',
                                            ],
                                            'type' => [
                                                'kind' => 'string',
                                                'enum' => [
                                                    'duration',
                                                    'now',
                                                    'timestamp',
                                                ],
                                            ],
                                        ],
                                        'required' => [
                                            'type',
                                        ],
                                    ],
                                    'settings' => [
                                        'kind' => 'object',
                                        'properties' => [
                                            'billing_cycle_anchor' => [
                                                'kind' => 'string',
                                                'enum' => [
                                                    'resume_at',
                                                    'unchanged',
                                                ],
                                            ],
                                            'payment_behavior' => [
                                                'kind' => 'string',
                                                'enum' => [
                                                    'resume_on_payment_attempt',
                                                    'resume_on_payment_success',
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
                                    ],
                                ],
                            ],
                            [
                                'kind' => 'string',
                                'enum' => [
                                    '',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        [
            'kind' => 'string',
            'enum' => [
                '',
            ],
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
