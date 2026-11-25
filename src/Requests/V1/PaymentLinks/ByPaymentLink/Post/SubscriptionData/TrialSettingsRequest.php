<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\SubscriptionData;

final class TrialSettingsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\SettingsVariant1Request::class, \StripeSDK\Enums\SettingsVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'end_behavior' => [
                    'kind' => 'object',
                    'properties' => [
                        'missing_payment_method' => [
                            'kind' => 'string',
                            'enum' => [
                                'cancel',
                                'create_invoice',
                                'pause',
                            ],
                        ],
                    ],
                    'required' => [
                        'missing_payment_method',
                    ],
                ],
            ],
            'required' => [
                'end_behavior',
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
