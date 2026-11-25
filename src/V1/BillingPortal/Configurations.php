<?php

declare(strict_types=1);

namespace StripeSDK\V1\BillingPortal;

final class Configurations extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/billing_portal/configurations [operationId: GetBillingPortalConfigurations] */
    /**
     * List portal configurations
     *
     * <p>Returns a list of configurations that describe the functionality of the customer portal.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\BillingPortal\Configurations $params = null): \StripeSDK\Responses\V1\BillingPortal\Configurations\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\BillingPortal\Configurations::class)->get($params);
    }

    /** POST /v1/billing_portal/configurations [operationId: PostBillingPortalConfigurations] */
    /**
     * Create a portal configuration
     *
     * <p>Creates a configuration that describes the functionality and behavior of a PortalSession</p>
     */
    public static function post(\StripeSDK\Requests\V1\BillingPortal\Configurations\Post $payload): \StripeSDK\DTOs\BillingPortal\Configuration|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\BillingPortal\Configurations::class)->post($payload);
    }

    /** GET /v1/billing_portal/configurations/{configuration} [operationId: GetBillingPortalConfigurationsConfiguration] */
    /**
     * Retrieve a portal configuration
     *
     * <p>Retrieves a configuration that describes the functionality of the customer portal.</p>
     */
    public static function getByConfiguration(string $configuration, ?\StripeSDK\GetParams\V1\BillingPortal\Configurations\ByConfiguration $params = null): \StripeSDK\DTOs\BillingPortal\Configuration|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\BillingPortal\Configurations::class)->getByConfiguration($configuration, $params);
    }

    /** POST /v1/billing_portal/configurations/{configuration} [operationId: PostBillingPortalConfigurationsConfiguration] */
    /**
     * Update a portal configuration
     *
     * <p>Updates a configuration that describes the functionality of the customer portal.</p>
     */
    public static function postByConfiguration(string $configuration, ?\StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post $payload = null): \StripeSDK\DTOs\BillingPortal\Configuration|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\BillingPortal\Configurations::class)->postByConfiguration($configuration, $payload);
    }
}
