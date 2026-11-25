<?php

declare(strict_types=1);

namespace StripeSDK\V1\Invoices;

final class CreatePreview extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/invoices/create_preview [operationId: PostInvoicesCreatePreview] */
    /**
     * Create a preview invoice
     *
     * <p>At any time, you can preview the upcoming invoice for a subscription or subscription schedule. This will show you all the charges that are pending, including subscription renewal charges, invoice item charges, etc. It will also show you any discounts that are applicable to the invoice.</p>
     *
     * <p>You can also preview the effects of creating or updating a subscription or subscription schedule, including a preview of any prorations that will take place. To ensure that the actual proration is calculated exactly the same as the previewed proration, you should pass the <code>subscription_details.proration_date</code> parameter when doing the actual subscription update.</p>
     *
     * <p>The recommended way to get only the prorations being previewed on the invoice is to consider line items where <code>parent.subscription_item_details.proration</code> is <code>true</code>.</p>
     *
     * <p>Note that when you are viewing an upcoming invoice, you are simply viewing a preview – the invoice has not yet been created. As such, the upcoming invoice will not show up in invoice listing calls, and you cannot use the API to pay or edit the invoice. If you want to change the amount that your customer will be billed, you can add, remove, or update pending invoice items, or update the customer’s discount.</p>
     *
     * <p>Note: Currency conversion calculations use the latest exchange rates. Exchange rates may vary between the time of the preview and the time of the actual invoice creation. <a href="https://docs.stripe.com/currencies/conversions">Learn more</a></p>
     */
    public static function post(?\StripeSDK\Requests\V1\Invoices\CreatePreview\Post $payload = null): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoices\CreatePreview::class)->post($payload);
    }
}
