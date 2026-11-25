<?php

declare(strict_types=1);

namespace StripeSDK\V1\Forwarding;

final class Requests extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/forwarding/requests [operationId: GetForwardingRequests] */
    /**
     * List all ForwardingRequests
     *
     * <p>Lists all ForwardingRequest objects.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Forwarding\Requests $params = null): \StripeSDK\Responses\V1\Forwarding\Requests\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Forwarding\Requests::class)->get($params);
    }

    /** POST /v1/forwarding/requests [operationId: PostForwardingRequests] */
    /**
     * Create a ForwardingRequest
     *
     * <p>Creates a ForwardingRequest object.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Forwarding\Requests\Post $payload): \StripeSDK\DTOs\Forwarding\Request|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Forwarding\Requests::class)->post($payload);
    }

    /** GET /v1/forwarding/requests/{id} [operationId: GetForwardingRequestsId] */
    /**
     * Retrieve a ForwardingRequest
     *
     * <p>Retrieves a ForwardingRequest object.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Forwarding\Requests\ById $params = null): \StripeSDK\DTOs\Forwarding\Request|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Forwarding\Requests::class)->getById($id, $params);
    }
}
