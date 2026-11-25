<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post;

final class MethodOptionsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\MethodOptionsRequestVariant1\OptionsVariant1Request::class, \StripeSDK\Enums\MethodOptionsRequestVariant2\OptionsVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'card' => [
                    'kind' => 'anyOf',
                    'branches' => [
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
