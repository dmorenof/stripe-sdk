<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class InvoicePayments extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/invoice_payments [operationId: GetInvoicePayments] */
    /**
     * List all payments for an invoice
     *
     * <p>When retrieving an invoice, there is an includable payments property containing the first handful of those items. There is also a URL where you can retrieve the full (paginated) list of payments.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\InvoicePayments $params = null): \StripeSDK\Responses\V1\InvoicePayments\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\InvoicePayments::class)->get($params);
    }

    /** GET /v1/invoice_payments/{invoice_payment} [operationId: GetInvoicePaymentsInvoicePayment] */
    /**
     * Retrieve an InvoicePayment
     *
     * <p>Retrieves the invoice payment with the given ID.</p>
     */
    public static function getByInvoicePayment(string $invoice_payment, ?\StripeSDK\GetParams\V1\InvoicePayments\ByInvoicePayment $params = null): \StripeSDK\DTOs\Invoice\Payment|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\InvoicePayments::class)->getByInvoicePayment($invoice_payment, $params);
    }
}
