<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\OutboundTransfers\Post\DestinationPaymentMethodOptions;

final class BankAccountRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\Request21Variant1Request::class, \StripeSDK\Enums\BankAccountRequest21Variant2\Request21Variant2Enum::class];
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
