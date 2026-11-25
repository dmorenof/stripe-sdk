<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing\PersonalizationDesign;

final class PhysicalBundleDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\Issuing\PhysicalBundle::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
        [
            'kind' => 'reference',
            'ref' => 'issuing.physical_bundle',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'issuing.physical_bundle' => [
            'kind' => 'object',
            'properties' => [
                'features' => [
                    'kind' => 'reference',
                    'ref' => 'issuing_physical_bundle_features',
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
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'issuing.physical_bundle',
                    ],
                ],
                'status' => [
                    'kind' => 'string',
                    'enum' => [
                        'active',
                        'inactive',
                        'review',
                    ],
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'custom',
                        'standard',
                    ],
                ],
            ],
            'required' => [
                'features',
                'id',
                'livemode',
                'name',
                'object',
                'status',
                'type',
            ],
        ],
        'issuing_physical_bundle_features' => [
            'kind' => 'object',
            'properties' => [
                'card_logo' => [
                    'kind' => 'string',
                    'enum' => [
                        'optional',
                        'required',
                        'unsupported',
                    ],
                ],
                'carrier_text' => [
                    'kind' => 'string',
                    'enum' => [
                        'optional',
                        'required',
                        'unsupported',
                    ],
                ],
                'second_line' => [
                    'kind' => 'string',
                    'enum' => [
                        'optional',
                        'required',
                        'unsupported',
                    ],
                ],
            ],
            'required' => [
                'card_logo',
                'carrier_text',
                'second_line',
            ],
        ],
    ];
}
