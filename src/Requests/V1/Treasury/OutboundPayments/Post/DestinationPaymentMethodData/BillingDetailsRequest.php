<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\OutboundPayments\Post\DestinationPaymentMethodData;

/**
 * billing_details_inner_params
 */
final class BillingDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Treasury\OutboundPayments\Post\DestinationPaymentMethodData\BillingDetails\DetailsAddressRequest $address;
    public \StripeSDK\Requests\V1\Treasury\OutboundPayments\Post\DestinationPaymentMethodData\BillingDetails\DetailsEmailRequest $email;
    public \StripeSDK\Requests\V1\Treasury\OutboundPayments\Post\DestinationPaymentMethodData\BillingDetails\DetailsNameRequest $name;
    public \StripeSDK\Requests\V1\Treasury\OutboundPayments\Post\DestinationPaymentMethodData\BillingDetails\DetailsPhoneRequest $phone;
}
