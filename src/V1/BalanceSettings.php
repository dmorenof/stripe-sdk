<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class BalanceSettings extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/balance_settings [operationId: GetBalanceSettings] */
    /**
     * Retrieve balance settings
     *
     * <p>Retrieves balance settings for a given connected account.
     *  Related guide: <a href="/connect/authentication">Making API calls for connected accounts</a></p>
     */
    public static function get(?\StripeSDK\GetParams\V1\BalanceSettings $params = null): \StripeSDK\DTOs\Balance\Settings|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\BalanceSettings::class)->get($params);
    }

    /** POST /v1/balance_settings [operationId: PostBalanceSettings] */
    /**
     * Update balance settings
     *
     * <p>Updates balance settings for a given connected account.
     *  Related guide: <a href="/connect/authentication">Making API calls for connected accounts</a></p>
     */
    public static function post(?\StripeSDK\Requests\V1\BalanceSettings\Post $payload = null): \StripeSDK\DTOs\Balance\Settings|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\BalanceSettings::class)->post($payload);
    }
}
