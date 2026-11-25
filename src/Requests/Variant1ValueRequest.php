<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

final class Variant1ValueRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\ValueVariant1Collection::class, \StripeSDK\Enums\ValueVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'object',
                'properties' => [
                    'payout_method' => [
                        'kind' => 'string',
                    ],
                    'transfer_up_to_amount' => [
                        'kind' => 'integer',
                    ],
                    'type' => [
                        'kind' => 'string',
                        'enum' => [
                            'transfer_all',
                            'transfer_up_to_amount',
                        ],
                    ],
                ],
                'required' => [
                    'payout_method',
                    'type',
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
