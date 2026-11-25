<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Issuing\Disputes\ByDispute;

final class Submit extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/issuing/disputes/{dispute}/submit',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\Dispute',
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
            'metadata' => 'nested',
        ],
    ];

    /**
     * Submit a dispute
     *
     * <p>Submits an Issuing <code>Dispute</code> to the card network. Stripe validates that all evidence fields required for the dispute’s reason are present. For more details, see <a href="/docs/issuing/purchases/disputes#dispute-reasons-and-evidence">Dispute reasons and evidence</a>.</p>
     */
    public function post(string $dispute, ?\StripeSDK\Requests\V1\Issuing\Disputes\ByDispute\Submit\Post $payload = null): \StripeSDK\DTOs\Issuing\Dispute|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Dispute|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['dispute' => $dispute], body: $payload);
        return $result;
    }
}
