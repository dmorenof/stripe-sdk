<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post\PaymentSettings\PaymentMethodOptions;

final class OptionsKonbiniRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsKonbiniRequest9Variant1\Request9Variant1Request::class, \StripeSDK\Enums\OptionsKonbiniRequest9Variant2\Request9Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
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
