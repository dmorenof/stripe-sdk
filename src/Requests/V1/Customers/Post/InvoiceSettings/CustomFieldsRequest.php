<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\Post\InvoiceSettings;

final class CustomFieldsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\CustomFieldsRequest2Variant1Array\Request2Variant1Collection::class, \StripeSDK\Enums\CustomFieldsRequest2Variant2\Request2Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'object',
                'properties' => [
                    'name' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 40,
                        ],
                    ],
                    'value' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 140,
                        ],
                    ],
                ],
                'required' => [
                    'name',
                    'value',
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
