<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Reviews\ByReview;

final class Approve extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/reviews/{review}/approve',
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
                'type' => '\\StripeSDK\\DTOs\\Review',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'review' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Approve a review
     *
     * <p>Approves a <code>Review</code> object, closing it and removing it from the list of reviews.</p>
     */
    public function post(string $review, ?\StripeSDK\Requests\V1\Reviews\ByReview\Approve\Post $payload = null): \StripeSDK\DTOs\Review|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Review|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['review' => $review], body: $payload);
        return $result;
    }
}
