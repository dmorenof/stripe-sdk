<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class InvoiceRenderingTemplates extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/invoice_rendering_templates [operationId: GetInvoiceRenderingTemplates] */
    /**
     * List all invoice rendering templates
     *
     * <p>List all templates, ordered by creation date, with the most recently created template appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\InvoiceRenderingTemplates $params = null): \StripeSDK\Responses\V1\InvoiceRenderingTemplates\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\InvoiceRenderingTemplates::class)->get($params);
    }

    /** GET /v1/invoice_rendering_templates/{template} [operationId: GetInvoiceRenderingTemplatesTemplate] */
    /**
     * Retrieve an invoice rendering template
     *
     * <p>Retrieves an invoice rendering template with the given ID. It by default returns the latest version of the template. Optionally, specify a version to see previous versions.</p>
     */
    public static function getByTemplate(string $template, ?\StripeSDK\GetParams\V1\InvoiceRenderingTemplates\ByTemplate $params = null): \StripeSDK\DTOs\Invoice\RenderingTemplate|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\InvoiceRenderingTemplates::class)->getByTemplate($template, $params);
    }
}
