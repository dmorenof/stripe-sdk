<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\PaymentMethodOptions;

final class CardPresentRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\CardPresentRequest2Variant1\Request2Variant1Request::class, \StripeSDK\Enums\CardPresentRequest2Variant2\Request2Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'capture_method' => [
                    'kind' => 'string',
                    'enum' => [
                        'manual',
                        'manual_preferred',
                    ],
                ],
                'request_extended_authorization' => [
                    'kind' => 'boolean',
                ],
                'request_incremental_authorization_support' => [
                    'kind' => 'boolean',
                ],
                'routing' => [
                    'kind' => 'object',
                    'properties' => [
                        'requested_priority' => [
                            'kind' => 'string',
                            'enum' => [
                                'domestic',
                                'international',
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
