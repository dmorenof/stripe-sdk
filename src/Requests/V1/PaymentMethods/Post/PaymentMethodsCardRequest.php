<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethods\Post;

final class PaymentMethodsCardRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\PaymentMethodsCardRequestVariant1\CardVariant1Request::class, \StripeSDK\Requests\CardVariant2Request::class];
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
                'networks' => [
                    'kind' => 'object',
                    'properties' => [
                        'preferred' => [
                            'kind' => 'string',
                            'enum' => [
                                'cartes_bancaires',
                                'mastercard',
                                'visa',
                            ],
                        ],
                    ],
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
