<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Files extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/files [operationId: GetFiles] */
    /**
     * List all files
     *
     * <p>Returns a list of the files that your account has access to. Stripe sorts and returns the files by their creation dates, placing the most recently created files at the top.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Files $params = null): \StripeSDK\Responses\V1\Files\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Files::class)->get($params);
    }

    /** POST /v1/files [operationId: PostFiles] */
    /**
     * Create a file
     *
     * <p>To upload a file to Stripe, you need to send a request of type <code>multipart/form-data</code>. Include the file you want to upload in the request, and the parameters for creating a file.</p>
     *
     * <p>All of Stripe’s officially supported Client libraries support sending <code>multipart/form-data</code>.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Files\Post $payload): \StripeSDK\DTOs\File|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Files::class)->post($payload);
    }

    /** GET /v1/files/{file} [operationId: GetFilesFile] */
    /**
     * Retrieve a file
     *
     * <p>Retrieves the details of an existing file object. After you supply a unique file ID, Stripe returns the corresponding file object. Learn how to <a href="/docs/file-upload#download-file-contents">access file contents</a>.</p>
     */
    public static function getByFile(string $file, ?\StripeSDK\GetParams\V1\Files\ByFile $params = null): \StripeSDK\DTOs\File|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Files::class)->getByFile($file, $params);
    }
}
