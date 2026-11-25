<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions;

final class WechatPayRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\WechatPayRequestVariant1\PayVariant1Request::class, \StripeSDK\Enums\WechatPayRequestVariant2\PayVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'app_id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'client' => [
                    'kind' => 'string',
                    'enum' => [
                        'android',
                        'ios',
                        'web',
                    ],
                ],
                'setup_future_usage' => [
                    'kind' => 'string',
                    'enum' => [
                        'none',
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
