<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\LinkAccountSessions\Post;

/**
 * limits_params
 *
 * Settings for configuring Session-specific limits.
 */
final class LinkAccountSessionsLimitsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'accounts',
    ];

    public \StripeSDK\Requests\V1\LinkAccountSessions\Post\Limits\LimitsAccountsRequest $accounts;
}
