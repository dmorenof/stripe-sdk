<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\ByInvoice\Post\PaymentSettings\PaymentMethodOptions;

final class OptionsPaytoRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsPaytoRequest4Variant1\Request4Variant1Request::class, \StripeSDK\Enums\OptionsPaytoRequest4Variant2\Request4Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'mandate_options' => [
                    'kind' => 'object',
                    'properties' => [
                        'amount' => [
                            'kind' => 'integer',
                        ],
                        'purpose' => [
                            'kind' => 'string',
                            'enum' => [
                                'dependant_support',
                                'government',
                                'loan',
                                'mortgage',
                                'other',
                                'pension',
                                'personal',
                                'retail',
                                'salary',
                                'tax',
                                'utility',
                            ],
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
