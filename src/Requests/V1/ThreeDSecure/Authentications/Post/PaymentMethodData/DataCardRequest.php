<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\PaymentMethodData;

final class DataCardRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\DataCardRequestVariant1\CardVariant1Request::class, \StripeSDK\Requests\DataCardRequestVariant2\CardVariant2Request::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'cvc' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'exp_month' => [
                    'kind' => 'integer',
                ],
                'exp_year' => [
                    'kind' => 'integer',
                ],
                'number' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
            'required' => [
                'exp_month',
                'exp_year',
                'number',
            ],
        ],
        [
            'kind' => 'object',
            'properties' => [
                'token' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
            'required' => [
                'token',
            ],
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
