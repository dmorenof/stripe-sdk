<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\CustomerSessions\Post;

/**
 * components
 *
 * Configuration for each component. At least 1 component must be enabled.
 */
final class CustomerSessionsComponentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\CustomerSessions\Post\Components\ActiveEntitlementsRequest $active_entitlements;
    public \StripeSDK\Requests\V1\CustomerSessions\Post\Components\BuyButtonRequest $buy_button;
    public \StripeSDK\Requests\V1\CustomerSessions\Post\Components\CustomerPortalRequest $customer_portal;
    public \StripeSDK\Requests\V1\CustomerSessions\Post\Components\CustomerSheetRequest $customer_sheet;
    public \StripeSDK\Requests\V1\CustomerSessions\Post\Components\PaymentElementRequest $mobile_payment_element;
    public \StripeSDK\Requests\V1\CustomerSessions\Post\Components\PaymentElement\PaymentElementRequest $payment_element;
    public \StripeSDK\Requests\V1\CustomerSessions\Post\Components\PricingTableRequest $pricing_table;
}
