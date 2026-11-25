<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Disputes\ByDispute;

final class Close extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/disputes/{dispute}/close',
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
                'type' => '\\StripeSDK\\DTOs\\Dispute',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'dispute' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Close a dispute
     *
     * <p>Closing the dispute for a charge indicates that you do not have any evidence to submit and are essentially dismissing the dispute (accepting it), acknowledging it as lost.</p>
     *
     * <p>The status of the dispute will change from <code>needs_response</code> to <code>lost</code>. <em>Closing a dispute is irreversible</em>.</p>
     */
    public function post(string $dispute, ?\StripeSDK\Requests\V1\Disputes\ByDispute\Close\Post $payload = null): \StripeSDK\DTOs\Dispute|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Dispute|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['dispute' => $dispute], body: $payload);
        return $result;
    }
}
