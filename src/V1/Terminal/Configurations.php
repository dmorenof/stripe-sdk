<?php

declare(strict_types=1);

namespace StripeSDK\V1\Terminal;

final class Configurations extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/terminal/configurations [operationId: GetTerminalConfigurations] */
    /**
     * List all Configurations
     *
     * <p>Returns a list of <code>Configuration</code> objects.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Terminal\Configurations $params = null): \StripeSDK\Responses\V1\Terminal\Configurations\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Configurations::class)->get($params);
    }

    /** POST /v1/terminal/configurations [operationId: PostTerminalConfigurations] */
    /**
     * Create a Configuration
     *
     * <p>Creates a new <code>Configuration</code> object.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\Terminal\Configurations\Post $payload = null): \StripeSDK\DTOs\Terminal\Configuration|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Configurations::class)->post($payload);
    }

    /** DELETE /v1/terminal/configurations/{configuration} [operationId: DeleteTerminalConfigurationsConfiguration] */
    /**
     * Delete a Configuration
     *
     * <p>Deletes a <code>Configuration</code> object.</p>
     */
    public static function deleteByConfiguration(string $configuration, ?\StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Delete $payload = null): \StripeSDK\DTOs\DeletedTerminal\Configuration|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Configurations::class)->deleteByConfiguration($configuration, $payload);
    }

    /** GET /v1/terminal/configurations/{configuration} [operationId: GetTerminalConfigurationsConfiguration] */
    /**
     * Retrieve a Configuration
     *
     * <p>Retrieves a <code>Configuration</code> object.</p>
     */
    public static function getByConfiguration(string $configuration, ?\StripeSDK\GetParams\V1\Terminal\Configurations\ByConfiguration $params = null): \StripeSDK\Responses\V1\Terminal\Configurations\ByConfiguration\GetStatus200\ByConfigurationGetStatus200Response|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Configurations::class)->getByConfiguration($configuration, $params);
    }

    /** POST /v1/terminal/configurations/{configuration} [operationId: PostTerminalConfigurationsConfiguration] */
    /**
     * Update a Configuration
     *
     * <p>Updates a new <code>Configuration</code> object.</p>
     */
    public static function postByConfiguration(string $configuration, ?\StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post $payload = null): \StripeSDK\Responses\V1\Terminal\Configurations\ByConfiguration\PostStatus200\ByConfigurationPostStatus200Response|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Configurations::class)->postByConfiguration($configuration, $payload);
    }
}
