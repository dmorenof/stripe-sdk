<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\Post\InvoiceSettings;

final class RenderingOptionsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\RenderingOptionsRequest2Variant1\Request2Variant1Request::class, \StripeSDK\Enums\RenderingOptionsRequest2Variant2\Request2Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'amount_tax_display' => [
                    'kind' => 'string',
                    'enum' => [
                        '',
                        'exclude_tax',
                        'include_inclusive_tax',
                    ],
                ],
                'template' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
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
