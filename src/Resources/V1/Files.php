<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class Files extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/files',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\Responses\\V1\\Files\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'created' => 'nested',
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all files
     *
     * <p>Returns a list of the files that your account has access to. Stripe sorts and returns the files by their creation dates, placing the most recently created files at the top.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Files $params = null): \StripeSDK\Responses\V1\Files\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Files\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/files',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\DTOs\\File',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'serverUrl' => 'https://files.stripe.com',
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'expand' => [
                'contentType' => 'text/plain',
                'nested' => true,
            ],
            'file' => [
                'contentType' => null,
                'filename' => 'file.bin',
            ],
            'file_link_data' => [
                'contentType' => 'text/plain',
                'nested' => true,
            ],
            'purpose' => [
                'contentType' => 'text/plain',
            ],
        ],
    ];

    /**
     * Create a file
     *
     * <p>To upload a file to Stripe, you need to send a request of type <code>multipart/form-data</code>. Include the file you want to upload in the request, and the parameters for creating a file.</p>
     *
     * <p>All of Stripe’s officially supported Client libraries support sending <code>multipart/form-data</code>.</p>
     */
    public function post(\StripeSDK\Requests\V1\Files\Post $payload): \StripeSDK\DTOs\File|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\File|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_FILE = [
        'method' => 'GET',
        'path' => '/v1/files/{file}',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\DTOs\\File',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'file' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a file
     *
     * <p>Retrieves the details of an existing file object. After you supply a unique file ID, Stripe returns the corresponding file object. Learn how to <a href="/docs/file-upload#download-file-contents">access file contents</a>.</p>
     */
    public function getByFile(string $file, ?\StripeSDK\GetParams\V1\Files\ByFile $params = null): \StripeSDK\DTOs\File|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\File|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_FILE), path: ['file' => $file], parameters: $params);
        return $result;
    }
}
