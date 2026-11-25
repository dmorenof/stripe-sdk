<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\BillingPortal;

final class Sessions extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/billing_portal/sessions',
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
                'type' => '\\StripeSDK\\DTOs\\BillingPortal\\Session',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'flow_data' => 'nested',
        ],
    ];

    /**
     * Create a portal session
     *
     * <p>Creates a session of the customer portal.</p>
     */
    public function post(?\StripeSDK\Requests\V1\BillingPortal\Sessions\Post $payload = null): \StripeSDK\DTOs\BillingPortal\Session|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\BillingPortal\Session|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
