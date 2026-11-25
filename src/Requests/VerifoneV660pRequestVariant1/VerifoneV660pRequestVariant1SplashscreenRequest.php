<?php

declare(strict_types=1);

namespace StripeSDK\Requests\VerifoneV660pRequestVariant1;

final class VerifoneV660pRequestVariant1SplashscreenRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\VerifoneV660pRequestVariant1SplashscreenRequestVariant2\SplashscreenVariant2Enum::class];
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
