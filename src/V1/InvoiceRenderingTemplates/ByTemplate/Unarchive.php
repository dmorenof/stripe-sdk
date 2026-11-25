<?php

declare(strict_types=1);

namespace StripeSDK\V1\InvoiceRenderingTemplates\ByTemplate;

final class Unarchive extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/invoice_rendering_templates/{template}/unarchive [operationId: PostInvoiceRenderingTemplatesTemplateUnarchive] */
    /**
     * Unarchive an invoice rendering template
     *
     * <p>Unarchive an invoice rendering template so it can be used on new Stripe objects again.</p>
     */
    public static function post(string $template, ?\StripeSDK\Requests\V1\InvoiceRenderingTemplates\ByTemplate\Unarchive\Post $payload = null): \StripeSDK\DTOs\Invoice\RenderingTemplate|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\InvoiceRenderingTemplates\ByTemplate\Unarchive::class)->post($template, $payload);
    }
}
