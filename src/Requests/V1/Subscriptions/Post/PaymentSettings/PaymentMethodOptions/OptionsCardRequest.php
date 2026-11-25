<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\Post\PaymentSettings\PaymentMethodOptions;

final class OptionsCardRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsCardRequest8Variant1\Request8Variant1Request::class, \StripeSDK\Enums\OptionsCardRequest8Variant2\Request8Variant2Enum::class];
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
                        'amount_type' => [
                            'kind' => 'string',
                            'enum' => [
                                'fixed',
                                'maximum',
                            ],
                        ],
                        'description' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 200,
                            ],
                        ],
                    ],
                ],
                'network' => [
                    'kind' => 'string',
                    'enum' => [
                        'amex',
                        'cartes_bancaires',
                        'diners',
                        'discover',
                        'eftpos_au',
                        'girocard',
                        'interac',
                        'jcb',
                        'link',
                        'mastercard',
                        'unionpay',
                        'unknown',
                        'visa',
                    ],
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'request_three_d_secure' => [
                    'kind' => 'string',
                    'enum' => [
                        'any',
                        'automatic',
                        'challenge',
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
