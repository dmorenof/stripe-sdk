<?php

declare(strict_types=1);

namespace StripeSDK\Requests\StripeS700RequestVariant1;

final class StripeS700RequestVariant1SplashscreenRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\StripeS700RequestVariant1SplashscreenRequestVariant2\SplashscreenVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
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
