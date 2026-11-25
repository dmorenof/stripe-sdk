<?php

declare(strict_types=1);

namespace StripeSDK\Requests\PauseSchedulesRequestVariant1Item;

final class PauseSchedulesRequestVariant1ItemResumeRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ResumeVariant1Request::class, \StripeSDK\Enums\ResumeVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
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
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
