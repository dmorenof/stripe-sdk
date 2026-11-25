<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions;

final class RevolutPayRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\RevolutPayRequestVariant1\PayVariant1Request::class, \StripeSDK\Enums\RevolutPayRequestVariant2\PayVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'capture_method' => [
                    'kind' => 'string',
                    'enum' => [
                        '',
                        'manual',
                    ],
                ],
                'setup_future_usage' => [
                    'kind' => 'string',
                    'enum' => [
                        '',
                        'none',
                        'off_session',
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
