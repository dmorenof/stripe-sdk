<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Configurations\Post\VerifoneM425;

final class M425SplashscreenRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\M425SplashscreenRequestVariant2\SplashscreenVariant2Enum::class];
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
