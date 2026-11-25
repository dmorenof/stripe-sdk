<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Sources extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/sources [operationId: PostSources] */
    /**
     * Create a source
     *
     * <p>Creates a new source object.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\Sources\Post $payload = null): \StripeSDK\DTOs\Source|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Sources::class)->post($payload);
    }

    /** GET /v1/sources/{source} [operationId: GetSourcesSource] */
    /**
     * Retrieve a source
     *
     * <p>Retrieves an existing source object. Supply the unique source ID from a source creation request and Stripe will return the corresponding up-to-date source object information.</p>
     */
    public static function getBySource(string $source, ?\StripeSDK\GetParams\V1\Sources\BySource $params = null): \StripeSDK\DTOs\Source|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Sources::class)->getBySource($source, $params);
    }

    /** POST /v1/sources/{source} [operationId: PostSourcesSource] */
    /**
     * Update a source
     *
     * <p>Updates the specified source by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     *
     * <p>This request accepts the <code>metadata</code> and <code>owner</code> as arguments. It is also possible to update type specific information for selected payment methods. Please refer to our <a href="/docs/sources">payment method guides</a> for more detail.</p>
     */
    public static function postBySource(string $source, ?\StripeSDK\Requests\V1\Sources\BySource\Post $payload = null): \StripeSDK\DTOs\Source|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Sources::class)->postBySource($source, $payload);
    }
}
