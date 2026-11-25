<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\Post\PaymentSettings\PaymentMethodOptions;

final class OptionsBancontactRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsBancontactRequest3Variant1\Request3Variant1Request::class, \StripeSDK\Enums\OptionsBancontactRequest3Variant2\Request3Variant2Enum::class];
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
