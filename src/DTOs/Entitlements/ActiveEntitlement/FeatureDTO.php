<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Entitlements\ActiveEntitlement;

final class FeatureDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\Entitlements\Feature::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
        [
            'kind' => 'reference',
            'ref' => 'entitlements.feature',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'entitlements.feature' => [
            'kind' => 'object',
            'properties' => [
                'active' => [
                    'kind' => 'boolean',
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
                'lookup_key' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'metadata' => [
                    'kind' => 'object',
                    'additional' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 500,
                        ],
                    ],
                ],
                'name' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 80,
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'entitlements.feature',
                    ],
                ],
            ],
            'required' => [
                'active',
                'id',
                'livemode',
                'lookup_key',
                'metadata',
                'name',
                'object',
            ],
        ],
    ];
}
