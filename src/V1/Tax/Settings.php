<?php

declare(strict_types=1);

namespace StripeSDK\V1\Tax;

final class Settings extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/tax/settings [operationId: GetTaxSettings] */
    /**
     * Retrieve settings
     *
     * <p>Retrieves Tax <code>Settings</code> for a merchant.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Tax\Settings $params = null): \StripeSDK\DTOs\Tax\Settings|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tax\Settings::class)->get($params);
    }

    /** POST /v1/tax/settings [operationId: PostTaxSettings] */
    /**
     * Update settings
     *
     * <p>Updates Tax <code>Settings</code> parameters used in tax calculations. All parameters are editable but none can be removed once set. Check the returned Tax <code>Settings</code> object and validate that its status is <code>active</code>.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\Tax\Settings\Post $payload = null): \StripeSDK\DTOs\Tax\Settings|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tax\Settings::class)->post($payload);
    }
}
