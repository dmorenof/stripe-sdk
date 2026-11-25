<?php

declare(strict_types=1);

namespace StripeSDK\Requests\MethodOptionsRequestVariant1CardRequestVariant1;

final class MethodOptionsRequestVariant1CardRequestVariant1RestrictionsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\RestrictionsVariant1Request::class, \StripeSDK\Enums\RestrictionsVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
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
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
