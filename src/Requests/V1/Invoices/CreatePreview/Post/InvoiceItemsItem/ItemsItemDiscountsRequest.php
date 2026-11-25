<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview\Post\InvoiceItemsItem;

final class ItemsItemDiscountsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\ItemsItemDiscountsRequest3Variant1Array\Request3Variant1Collection::class, \StripeSDK\Enums\ItemsItemDiscountsRequest3Variant2\Request3Variant2Enum::class];
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
