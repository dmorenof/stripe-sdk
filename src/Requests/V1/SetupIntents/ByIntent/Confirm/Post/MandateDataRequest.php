<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Confirm\Post;

final class MandateDataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\MandateDataRequest4Variant1\Request4Variant1Request::class, \StripeSDK\Enums\MandateDataRequest4Variant2\Request4Variant2Enum::class, \StripeSDK\Requests\Request4Variant3Request::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'customer_acceptance' => [
                    'kind' => 'object',
                    'properties' => [
                        'accepted_at' => [
                            'kind' => 'integer',
                        ],
                        'offline' => [
                            'kind' => 'object',
                        ],
                        'online' => [
                            'kind' => 'object',
                            'properties' => [
                                'ip_address' => [
                                    'kind' => 'string',
                                ],
                                'user_agent' => [
                                    'kind' => 'string',
                                    'rules' => [
                                        'maxLength' => 5000,
                                    ],
                                ],
                            ],
                            'required' => [
                                'ip_address',
                                'user_agent',
                            ],
                        ],
                        'type' => [
                            'kind' => 'string',
                            'enum' => [
                                'offline',
                                'online',
                            ],
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                    ],
                    'required' => [
                        'type',
                    ],
                ],
            ],
            'required' => [
                'customer_acceptance',
            ],
        ],
        [
            'kind' => 'string',
            'enum' => [
                '',
            ],
        ],
        [
            'kind' => 'object',
            'properties' => [
                'customer_acceptance' => [
                    'kind' => 'object',
                    'properties' => [
                        'online' => [
                            'kind' => 'object',
                            'properties' => [
                                'ip_address' => [
                                    'kind' => 'string',
                                ],
                                'user_agent' => [
                                    'kind' => 'string',
                                    'rules' => [
                                        'maxLength' => 5000,
                                    ],
                                ],
                            ],
                        ],
                        'type' => [
                            'kind' => 'string',
                            'enum' => [
                                'online',
                            ],
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                    ],
                    'required' => [
                        'online',
                        'type',
                    ],
                ],
            ],
            'required' => [
                'customer_acceptance',
            ],
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
