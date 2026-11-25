<?php

declare(strict_types=1);

namespace StripeSDK\V1\Invoices\ByInvoice;

final class Send extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/invoices/{invoice}/send [operationId: PostInvoicesInvoiceSend] */
    /**
     * Send an invoice for manual payment
     *
     * <p>Stripe will automatically send invoices to customers according to your <a href="https://dashboard.stripe.com/account/billing/automatic">subscriptions settings</a>. However, if you’d like to manually send an invoice to your customer out of the normal schedule, you can do so. When sending invoices that have already been paid, there will be no reference to the payment in the email.</p>
     *
     * <p>Requests made in test-mode result in no emails being sent, despite sending an <code>invoice.sent</code> event.</p>
     */
    public static function post(string $invoice, ?\StripeSDK\Requests\V1\Invoices\ByInvoice\Send\Post $payload = null): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoices\ByInvoice\Send::class)->post($invoice, $payload);
    }
}
