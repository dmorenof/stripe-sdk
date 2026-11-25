<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Invoices;

final class CreatePreview extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/invoices/create_preview',
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
                'type' => '\\StripeSDK\\DTOs\\Invoice',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'automatic_tax' => 'nested',
            'customer_details' => 'nested',
            'discounts' => 'nested',
            'expand' => 'nested',
            'invoice_items' => 'nested',
            'issuer' => 'nested',
            'on_behalf_of' => 'nested',
            'schedule_details' => 'nested',
            'subscription_details' => 'nested',
        ],
    ];

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
    public function post(?\StripeSDK\Requests\V1\Invoices\CreatePreview\Post $payload = null): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
