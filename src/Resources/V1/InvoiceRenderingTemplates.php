<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class InvoiceRenderingTemplates extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/invoice_rendering_templates',
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
                'type' => '\\StripeSDK\\Responses\\V1\\InvoiceRenderingTemplates\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all invoice rendering templates
     *
     * <p>List all templates, ordered by creation date, with the most recently created template appearing first.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\InvoiceRenderingTemplates $params = null): \StripeSDK\Responses\V1\InvoiceRenderingTemplates\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\InvoiceRenderingTemplates\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_TEMPLATE = [
        'method' => 'GET',
        'path' => '/v1/invoice_rendering_templates/{template}',
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
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve an invoice rendering template
     *
     * <p>Retrieves an invoice rendering template with the given ID. It by default returns the latest version of the template. Optionally, specify a version to see previous versions.</p>
     */
    public function getByTemplate(string $template, ?\StripeSDK\GetParams\V1\InvoiceRenderingTemplates\ByTemplate $params = null): \StripeSDK\DTOs\Invoice\RenderingTemplate|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Invoice\RenderingTemplate|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_TEMPLATE), path: ['template' => $template], parameters: $params);
        return $result;
    }
}
