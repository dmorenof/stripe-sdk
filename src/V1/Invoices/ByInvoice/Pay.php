<?php

declare(strict_types=1);

namespace StripeSDK\V1\Invoices\ByInvoice;

final class Pay extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/invoices/{invoice}/pay [operationId: PostInvoicesInvoicePay] */
    /**
     * Pay an invoice
     *
     * <p>Stripe automatically creates and then attempts to collect payment on invoices for customers on subscriptions according to your <a href="https://dashboard.stripe.com/account/billing/automatic">subscriptions settings</a>. However, if you’d like to attempt payment on an invoice out of the normal collection schedule or for some other reason, you can do so.</p>
     */
    public static function post(string $invoice, ?\StripeSDK\Requests\V1\Invoices\ByInvoice\Pay\Post $payload = null): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoices\ByInvoice\Pay::class)->post($invoice, $payload);
    }
}
