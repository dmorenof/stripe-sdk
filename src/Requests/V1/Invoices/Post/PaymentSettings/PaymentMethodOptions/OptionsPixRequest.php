<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\Post\PaymentSettings\PaymentMethodOptions;

final class OptionsPixRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsPixRequest3Variant1\Request3Variant1Request::class, \StripeSDK\Enums\OptionsPixRequest3Variant2\Request3Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'amount_includes_iof' => [
                    'kind' => 'string',
                    'enum' => [
                        'always',
                        'never',
                    ],
                ],
                'expires_after_seconds' => [
                    'kind' => 'integer',
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
