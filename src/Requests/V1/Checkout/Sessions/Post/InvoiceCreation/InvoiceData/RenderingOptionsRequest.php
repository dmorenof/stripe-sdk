<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\InvoiceCreation\InvoiceData;

final class RenderingOptionsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsVariant1Request::class, \StripeSDK\Enums\RenderingOptionsRequestVariant2\OptionsVariant2Enum::class];
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
