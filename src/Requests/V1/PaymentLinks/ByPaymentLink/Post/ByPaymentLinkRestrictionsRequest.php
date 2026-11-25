<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post;

final class ByPaymentLinkRestrictionsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ByPaymentLinkRestrictionsRequestVariant1\RestrictionsVariant1Request::class, \StripeSDK\Enums\ByPaymentLinkRestrictionsRequestVariant2\RestrictionsVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'completed_sessions' => [
                    'kind' => 'object',
                    'properties' => [
                        'limit' => [
                            'kind' => 'integer',
                        ],
                    ],
                    'required' => [
                        'limit',
                    ],
                ],
            ],
            'required' => [
                'completed_sessions',
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
