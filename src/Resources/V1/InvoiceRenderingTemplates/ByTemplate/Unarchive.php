<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\InvoiceRenderingTemplates\ByTemplate;

final class Unarchive extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/invoice_rendering_templates/{template}/unarchive',
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
                'type' => '\\StripeSDK\\DTOs\\Invoice\\RenderingTemplate',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'template' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Unarchive an invoice rendering template
     *
     * <p>Unarchive an invoice rendering template so it can be used on new Stripe objects again.</p>
     */
    public function post(string $template, ?\StripeSDK\Requests\V1\InvoiceRenderingTemplates\ByTemplate\Unarchive\Post $payload = null): \StripeSDK\DTOs\Invoice\RenderingTemplate|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Invoice\RenderingTemplate|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['template' => $template], body: $payload);
        return $result;
    }
}
