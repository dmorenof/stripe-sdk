<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\Post\DefaultSettings\InvoiceSettings;

final class CustomFieldsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\Request13Variant1Collection::class, \StripeSDK\Enums\CustomFieldsRequest13Variant2\Request13Variant2Enum::class];
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
