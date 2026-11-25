<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal\SubscriptionCancellationReason;

final class FeedbackOptionsDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\Billing\FeedbackOption::class];
    protected const array BRANCH_SCHEMAS = [
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
    ];
    protected const array SCHEMA_DEFINITIONS = [
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
        'feedback_options_status_transitions' => [
            'kind' => 'object',
            'properties' => [
                'deactivated_at' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
            ],
        ],
    ];
}
