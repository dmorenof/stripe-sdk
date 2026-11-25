<?php

declare(strict_types=1);

namespace StripeSDK\V1\Accounts\ByAccount;

final class Capabilities extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/accounts/{account}/capabilities [operationId: GetAccountsAccountCapabilities] */
    /**
     * List all account capabilities
     *
     * <p>Returns a list of capabilities associated with the account. The capabilities are returned sorted by creation date, with the most recent capability appearing first.</p>
     */
    public static function get(string $account, ?\StripeSDK\GetParams\V1\Accounts\ByAccount\Capabilities $params = null): \StripeSDK\Responses\V1\Accounts\ByAccount\Capabilities\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\Capabilities::class)->get($account, $params);
    }

    /** GET /v1/accounts/{account}/capabilities/{capability} [operationId: GetAccountsAccountCapabilitiesCapability] */
    /**
     * Retrieve an Account Capability
     *
     * <p>Retrieves information about the specified Account Capability.</p>
     */
    public static function getByCapability(\StripeSDK\PathParams\V1\Accounts\ByAccount\Capabilities\ByCapability $identifier, ?\StripeSDK\GetParams\V1\Accounts\ByAccount\Capabilities\ByCapability $params = null): \StripeSDK\DTOs\Capability|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\Capabilities::class)->getByCapability($identifier, $params);
    }

    /** POST /v1/accounts/{account}/capabilities/{capability} [operationId: PostAccountsAccountCapabilitiesCapability] */
    /**
     * Update an Account Capability
     *
     * <p>Updates an existing Account Capability. Request or remove a capability by updating its <code>requested</code> parameter.</p>
     */
    public static function postByCapability(\StripeSDK\PathParams\V1\Accounts\ByAccount\Capabilities\ByCapability $identifier, ?\StripeSDK\Requests\V1\Accounts\ByAccount\Capabilities\ByCapability\Post $payload = null): \StripeSDK\DTOs\Capability|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\Capabilities::class)->postByCapability($identifier, $payload);
    }
}
