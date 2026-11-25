<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\ByInvoice\AddLines\Post\LinesItem;

final class LinesItemDiscountsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\LinesItemDiscountsRequestVariant1Array\DiscountsVariant1Collection::class, \StripeSDK\Enums\LinesItemDiscountsRequestVariant2\DiscountsVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'object',
                'properties' => [
                    'coupon' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 5000,
                        ],
                    ],
                    'discount' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 5000,
                        ],
                    ],
                    'promotion_code' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 5000,
                        ],
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
