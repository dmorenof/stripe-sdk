<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\OutboundPayments\Post\DestinationPaymentMethodOptions;

final class BankAccountRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\Request20Variant1Request::class, \StripeSDK\Enums\BankAccountRequest20Variant2\Request20Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'network' => [
                    'kind' => 'string',
                    'enum' => [
                        'ach',
                        'us_domestic_wire',
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
