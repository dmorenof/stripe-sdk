<?php

declare(strict_types=1);

namespace StripeSDK\Requests\LineItemsRequestVariant1Item;

/**
 * amount_details_line_item_payment_method_options_param
 */
final class MethodOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\LineItemsRequestVariant1Item\PaymentMethodOptions\OptionsCardRequest $card;
    public \StripeSDK\Requests\LineItemsRequestVariant1Item\PaymentMethodOptions\CardPresentRequest $card_present;
    public \StripeSDK\Requests\LineItemsRequestVariant1Item\PaymentMethodOptions\OptionsKlarnaRequest $klarna;
    public \StripeSDK\Requests\LineItemsRequestVariant1Item\PaymentMethodOptions\OptionsPaypalRequest $paypal;
}
