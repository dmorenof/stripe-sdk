<?php

declare(strict_types=1);

namespace StripeSDK\V1\Terminal;

final class Readers extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/terminal/readers [operationId: GetTerminalReaders] */
    /**
     * List all Readers
     *
     * <p>Returns a list of <code>Reader</code> objects.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Terminal\Readers $params = null): \StripeSDK\Responses\V1\Terminal\Readers\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Readers::class)->get($params);
    }

    /** POST /v1/terminal/readers [operationId: PostTerminalReaders] */
    /**
     * Create a Reader
     *
     * <p>Creates a new <code>Reader</code> object.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Terminal\Readers\Post $payload): \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Readers::class)->post($payload);
    }

    /** DELETE /v1/terminal/readers/{reader} [operationId: DeleteTerminalReadersReader] */
    /**
     * Delete a Reader
     *
     * <p>Deletes a <code>Reader</code> object.</p>
     */
    public static function deleteByReader(string $reader, ?\StripeSDK\Requests\V1\Terminal\Readers\ByReader\Delete $payload = null): \StripeSDK\DTOs\DeletedTerminal\Reader|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Readers::class)->deleteByReader($reader, $payload);
    }

    /** GET /v1/terminal/readers/{reader} [operationId: GetTerminalReadersReader] */
    /**
     * Retrieve a Reader
     *
     * <p>Retrieves a <code>Reader</code> object.</p>
     */
    public static function getByReader(string $reader, ?\StripeSDK\GetParams\V1\Terminal\Readers\ByReader $params = null): \StripeSDK\Responses\V1\Terminal\Readers\ByReader\GetStatus200\ByReaderGetStatus200Response|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Readers::class)->getByReader($reader, $params);
    }

    /** POST /v1/terminal/readers/{reader} [operationId: PostTerminalReadersReader] */
    /**
     * Update a Reader
     *
     * <p>Updates a <code>Reader</code> object by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     */
    public static function postByReader(string $reader, ?\StripeSDK\Requests\V1\Terminal\Readers\ByReader\Post $payload = null): \StripeSDK\Responses\V1\Terminal\Readers\ByReader\PostStatus200\ByReaderPostStatus200Response|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Readers::class)->postByReader($reader, $payload);
    }
}
