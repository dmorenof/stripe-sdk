<?php

declare(strict_types=1);

namespace StripeSDK\Requests\PaymentDetailsRequestVariant1;

/**
 * payment_details
 */
final class DetailsVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\PaymentDetailsRequestVariant1\CustomerReferenceRequest $customer_reference;
    public \StripeSDK\Requests\PaymentDetailsRequestVariant1\OrderReferenceRequest $order_reference;
}
