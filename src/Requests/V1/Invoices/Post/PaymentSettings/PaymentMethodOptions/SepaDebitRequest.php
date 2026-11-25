<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\Post\PaymentSettings\PaymentMethodOptions;

final class SepaDebitRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\SepaDebitRequest3Variant1\Request3Variant1Request::class, \StripeSDK\Enums\SepaDebitRequest3Variant2\Request3Variant2Enum::class];
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
