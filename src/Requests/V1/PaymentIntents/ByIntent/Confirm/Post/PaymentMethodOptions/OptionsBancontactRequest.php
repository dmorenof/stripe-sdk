<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\PaymentMethodOptions;

final class OptionsBancontactRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsBancontactRequest7Variant1\Request7Variant1Request::class, \StripeSDK\Enums\OptionsBancontactRequest7Variant2\Request7Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'preferred_language' => [
                    'kind' => 'string',
                    'enum' => [
                        'de',
                        'en',
                        'fr',
                        'nl',
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
