<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Configurations\Post\StripeS710;

final class S710SplashscreenRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\S710SplashscreenRequestVariant2\SplashscreenVariant2Enum::class];
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
