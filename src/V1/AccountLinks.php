<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class AccountLinks extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/account_links [operationId: PostAccountLinks] */
    /**
     * Create an account link
     *
     * <p>Creates an AccountLink object that includes a single-use Stripe URL that the platform can redirect their user to in order to take them through the Connect Onboarding flow.</p>
     */
    public static function post(\StripeSDK\Requests\V1\AccountLinks\Post $payload): \StripeSDK\DTOs\Account\Link|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\AccountLinks::class)->post($payload);
    }
}
