<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\Post\CustomText;

final class AfterSubmitRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\AfterSubmitRequest2Variant1\Request2Variant1Request::class, \StripeSDK\Enums\AfterSubmitRequest2Variant2\Request2Variant2Enum::class];
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
