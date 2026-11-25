<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\Post\PaymentSettings\PaymentMethodOptions;

final class OptionsBlikRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsBlikRequest3Variant1\Request3Variant1Request::class, \StripeSDK\Enums\OptionsBlikRequest3Variant2\Request3Variant2Enum::class];
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
