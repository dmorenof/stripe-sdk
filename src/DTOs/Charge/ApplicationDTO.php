<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Charge;

final class ApplicationDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\Application::class];
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
    ];
}
