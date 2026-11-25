<?php

declare(strict_types=1);

namespace StripeSDK\Requests\MethodOptionsRequestVariant1;

final class MethodOptionsRequestVariant1CardRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\MethodOptionsRequestVariant1CardRequestVariant1\CardVariant1Request::class, \StripeSDK\Enums\MethodOptionsRequestVariant1CardRequestVariant2\CardVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'restrictions' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'object',
                            'properties' => [
                                'brands_blocked' => [
                                    'kind' => 'anyOf',
                                    'branches' => [
                                        [
                                            'kind' => 'array',
                                            'items' => [
                                                'kind' => 'string',
                                                'enum' => [
                                                    'american_express',
                                                    'discover_global_network',
                                                    'mastercard',
                                                    'visa',
                                                ],
                                            ],
                                        ],
                                        [
                                            'kind' => 'string',
                                            'enum' => [
                                                '',
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
