<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class WebhookEndpoints extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/webhook_endpoints [operationId: GetWebhookEndpoints] */
    /**
     * List all webhook endpoints
     *
     * <p>Returns a list of your webhook endpoints.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\WebhookEndpoints $params = null): \StripeSDK\Responses\V1\WebhookEndpoints\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\WebhookEndpoints::class)->get($params);
    }

    /** POST /v1/webhook_endpoints [operationId: PostWebhookEndpoints] */
    /**
     * Create a webhook endpoint
     *
     * <p>A webhook endpoint must have a <code>url</code> and a list of <code>enabled_events</code>. You may optionally specify the Boolean <code>connect</code> parameter. If set to true, then a Connect webhook endpoint that notifies the specified <code>url</code> about events from all connected accounts is created; otherwise an account webhook endpoint that notifies the specified <code>url</code> only about events from your account is created. You can also create webhook endpoints in the <a href="https://dashboard.stripe.com/account/webhooks">webhooks settings</a> section of the Dashboard.</p>
     */
    public static function post(\StripeSDK\Requests\V1\WebhookEndpoints\Post $payload): \StripeSDK\DTOs\WebhookEndpoint|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\WebhookEndpoints::class)->post($payload);
    }

    /** DELETE /v1/webhook_endpoints/{webhook_endpoint} [operationId: DeleteWebhookEndpointsWebhookEndpoint] */
    /**
     * Delete a webhook endpoint
     *
     * <p>You can also delete webhook endpoints via the <a href="https://dashboard.stripe.com/account/webhooks">webhook endpoint management</a> page of the Stripe dashboard.</p>
     */
    public static function deleteByWebhookEndpoint(string $webhook_endpoint, ?\StripeSDK\Requests\V1\WebhookEndpoints\ByWebhookEndpoint\Delete $payload = null): \StripeSDK\DTOs\Deleted\WebhookEndpoint|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\WebhookEndpoints::class)->deleteByWebhookEndpoint($webhook_endpoint, $payload);
    }

    /** GET /v1/webhook_endpoints/{webhook_endpoint} [operationId: GetWebhookEndpointsWebhookEndpoint] */
    /**
     * Retrieve a webhook endpoint
     *
     * <p>Retrieves the webhook endpoint with the given ID.</p>
     */
    public static function getByWebhookEndpoint(string $webhook_endpoint, ?\StripeSDK\GetParams\V1\WebhookEndpoints\ByWebhookEndpoint $params = null): \StripeSDK\DTOs\WebhookEndpoint|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\WebhookEndpoints::class)->getByWebhookEndpoint($webhook_endpoint, $params);
    }

    /** POST /v1/webhook_endpoints/{webhook_endpoint} [operationId: PostWebhookEndpointsWebhookEndpoint] */
    /**
     * Update a webhook endpoint
     *
     * <p>Updates the webhook endpoint. You may edit the <code>url</code>, the list of <code>enabled_events</code>, and the status of your endpoint.</p>
     */
    public static function postByWebhookEndpoint(string $webhook_endpoint, ?\StripeSDK\Requests\V1\WebhookEndpoints\ByWebhookEndpoint\Post $payload = null): \StripeSDK\DTOs\WebhookEndpoint|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\WebhookEndpoints::class)->postByWebhookEndpoint($webhook_endpoint, $payload);
    }
}
