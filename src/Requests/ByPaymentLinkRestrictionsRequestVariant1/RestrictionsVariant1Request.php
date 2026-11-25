<?php

declare(strict_types=1);

namespace StripeSDK\Requests\ByPaymentLinkRestrictionsRequestVariant1;

/**
 * restrictions_params
 */
final class RestrictionsVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'completed_sessions',
    ];

    public \StripeSDK\Requests\ByPaymentLinkRestrictionsRequestVariant1\CompletedSessionsRequest $completed_sessions;
}
