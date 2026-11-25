<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

final class ApplicationDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\Application::class, \StripeSDK\DTOs\Deleted\Application::class];
    protected const array BRANCH_SCHEMAS = [
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
    ];
}
