<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Billing\FeedbackOptions\ById;

final class Deactivate extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/billing/feedback_options/{id}/deactivate',
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
                'type' => '\\StripeSDK\\DTOs\\Billing\\FeedbackOption',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Deactivate a feedback option
     *
     * <p>Deactivates a feedback option. Deactivated feedback options cannot be used in portal configurations.</p>
     */
    public function post(string $id, ?\StripeSDK\Requests\V1\Billing\FeedbackOptions\ById\Deactivate\Post $payload = null): \StripeSDK\DTOs\Billing\FeedbackOption|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Billing\FeedbackOption|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], body: $payload);
        return $result;
    }
}
