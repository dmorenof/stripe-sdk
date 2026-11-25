<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions;

final class CardPresentRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\PresentVariant1Request::class, \StripeSDK\Enums\PresentVariant2Enum::class];
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
