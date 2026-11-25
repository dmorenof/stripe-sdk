<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Terminal;

final class OnboardingLinks extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/terminal/onboarding_links',
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
                'type' => '\\StripeSDK\\DTOs\\Terminal\\OnboardingLink',
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
            'link_options' => 'nested',
        ],
    ];

    /**
     * Create an Onboarding Link
     *
     * <p>Creates a new <code>OnboardingLink</code> object that contains a redirect_url used for onboarding onto Tap to Pay on iPhone.</p>
     */
    public function post(\StripeSDK\Requests\V1\Terminal\OnboardingLinks\Post $payload): \StripeSDK\DTOs\Terminal\OnboardingLink|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Terminal\OnboardingLink|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
