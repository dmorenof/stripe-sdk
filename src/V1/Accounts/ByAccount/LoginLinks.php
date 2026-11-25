<?php

declare(strict_types=1);

namespace StripeSDK\V1\Accounts\ByAccount;

final class LoginLinks extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/accounts/{account}/login_links [operationId: PostAccountsAccountLoginLinks] */
    /**
     * Create a login link
     *
     * <p>Creates a login link for a connected account to access the Express Dashboard.</p>
     *
     * <p><strong>You can only create login links for accounts that use the <a href="/connect/express-dashboard">Express Dashboard</a> and are connected to your platform</strong>.</p>
     */
    public static function post(string $account, ?\StripeSDK\Requests\V1\Accounts\ByAccount\LoginLinks\Post $payload = null): \StripeSDK\DTOs\LoginLink|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\LoginLinks::class)->post($account, $payload);
    }
}
