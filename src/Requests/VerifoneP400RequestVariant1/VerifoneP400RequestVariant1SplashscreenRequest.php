<?php

declare(strict_types=1);

namespace StripeSDK\Requests\VerifoneP400RequestVariant1;

final class VerifoneP400RequestVariant1SplashscreenRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\VerifoneP400RequestVariant1SplashscreenRequestVariant2\SplashscreenVariant2Enum::class];
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
