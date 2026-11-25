<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\PaymentMethodOptions;

final class OptionsIdealRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsIdealRequest2Variant1\Request2Variant1Request::class, \StripeSDK\Enums\OptionsIdealRequest2Variant2\Request2Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
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
