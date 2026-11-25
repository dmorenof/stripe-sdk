<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Terminal\Reader;

final class LocationDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\Terminal\Location::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
        [
            'kind' => 'reference',
            'ref' => 'terminal.location',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'address_api_resource_terminal' => [
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
        'legal_entity_japan_address' => [
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
                'town' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'terminal.location' => [
            'kind' => 'object',
            'properties' => [
                'address' => [
                    'kind' => 'reference',
                    'ref' => 'address_api_resource_terminal',
                ],
                'address_kana' => [
                    'kind' => 'reference',
                    'ref' => 'legal_entity_japan_address',
                ],
                'address_kanji' => [
                    'kind' => 'reference',
                    'ref' => 'legal_entity_japan_address',
                ],
                'configuration_overrides' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'display_name' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'display_name_kana' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'display_name_kanji' => [
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
                'metadata' => [
                    'kind' => 'object',
                    'additional' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 500,
                        ],
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'terminal.location',
                    ],
                ],
                'phone' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
            'required' => [
                'address',
                'display_name',
                'id',
                'livemode',
                'metadata',
                'object',
            ],
        ],
    ];
}
