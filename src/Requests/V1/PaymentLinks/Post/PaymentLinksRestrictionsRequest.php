<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\Post;

/**
 * restrictions_params
 *
 * Settings that restrict the usage of a payment link.
 */
final class PaymentLinksRestrictionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'completed_sessions',
    ];

    public \StripeSDK\Requests\V1\PaymentLinks\Post\Restrictions\CompletedSessionsRequest $completed_sessions;
}
