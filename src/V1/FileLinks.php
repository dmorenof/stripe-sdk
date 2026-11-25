<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class FileLinks extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/file_links [operationId: GetFileLinks] */
    /**
     * List all file links
     *
     * <p>Returns a list of file links.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\FileLinks $params = null): \StripeSDK\Responses\V1\FileLinks\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\FileLinks::class)->get($params);
    }

    /** POST /v1/file_links [operationId: PostFileLinks] */
    /**
     * Create a file link
     *
     * <p>Creates a new file link object.</p>
     */
    public static function post(\StripeSDK\Requests\V1\FileLinks\Post $payload): \StripeSDK\DTOs\FileLink|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\FileLinks::class)->post($payload);
    }

    /** GET /v1/file_links/{link} [operationId: GetFileLinksLink] */
    /**
     * Retrieve a file link
     *
     * <p>Retrieves the file link with the given ID.</p>
     */
    public static function getByLink(string $link, ?\StripeSDK\GetParams\V1\FileLinks\ByLink $params = null): \StripeSDK\DTOs\FileLink|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\FileLinks::class)->getByLink($link, $params);
    }

    /** POST /v1/file_links/{link} [operationId: PostFileLinksLink] */
    /**
     * Update a file link
     *
     * <p>Updates an existing file link object. Expired links can no longer be updated.</p>
     */
    public static function postByLink(string $link, ?\StripeSDK\Requests\V1\FileLinks\ByLink\Post $payload = null): \StripeSDK\DTOs\FileLink|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\FileLinks::class)->postByLink($link, $payload);
    }
}
