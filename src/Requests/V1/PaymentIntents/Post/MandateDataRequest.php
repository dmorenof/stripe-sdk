<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post;

final class MandateDataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\MandateDataRequestVariant1\DataVariant1Request::class, \StripeSDK\Enums\MandateDataRequestVariant2\DataVariant2Enum::class];
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
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
