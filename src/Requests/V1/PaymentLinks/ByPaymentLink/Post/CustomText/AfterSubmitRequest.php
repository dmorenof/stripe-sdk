<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\CustomText;

final class AfterSubmitRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\AfterSubmitRequest3Variant1\Request3Variant1Request::class, \StripeSDK\Enums\AfterSubmitRequest3Variant2\Request3Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'message' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 1200,
                    ],
                ],
            ],
            'required' => [
                'message',
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
