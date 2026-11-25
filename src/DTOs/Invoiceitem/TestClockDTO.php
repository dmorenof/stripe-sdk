<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoiceitem;

final class TestClockDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\TestHelpers\TestClock::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
        [
            'kind' => 'reference',
            'ref' => 'test_helpers.test_clock',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'billing_clocks_resource_status_details_advancing_status_details' => [
            'kind' => 'object',
            'properties' => [
                'target_frozen_time' => [
                    'kind' => 'integer',
                ],
            ],
            'required' => [
                'target_frozen_time',
            ],
        ],
        'billing_clocks_resource_status_details_status_details' => [
            'kind' => 'object',
            'properties' => [
                'advancing' => [
                    'kind' => 'reference',
                    'ref' => 'billing_clocks_resource_status_details_advancing_status_details',
                ],
            ],
        ],
        'test_helpers.test_clock' => [
            'kind' => 'object',
            'properties' => [
                'created' => [
                    'kind' => 'integer',
                ],
                'deletes_after' => [
                    'kind' => 'integer',
                ],
                'frozen_time' => [
                    'kind' => 'integer',
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
                        'test_helpers.test_clock',
                    ],
                ],
                'status' => [
                    'kind' => 'string',
                    'enum' => [
                        'advancing',
                        'internal_failure',
                        'ready',
                    ],
                ],
                'status_details' => [
                    'kind' => 'reference',
                    'ref' => 'billing_clocks_resource_status_details_status_details',
                ],
            ],
            'required' => [
                'created',
                'deletes_after',
                'frozen_time',
                'id',
                'livemode',
                'object',
                'status',
                'status_details',
            ],
        ],
    ];
}
