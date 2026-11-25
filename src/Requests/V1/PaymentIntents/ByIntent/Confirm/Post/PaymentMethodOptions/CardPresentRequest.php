<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\PaymentMethodOptions;

final class CardPresentRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\CardPresentRequest3Variant1\Request3Variant1Request::class, \StripeSDK\Enums\CardPresentRequest3Variant2\Request3Variant2Enum::class];
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
