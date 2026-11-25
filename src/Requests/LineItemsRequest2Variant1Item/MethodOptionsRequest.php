<?php

declare(strict_types=1);

namespace StripeSDK\Requests\LineItemsRequest2Variant1Item;

/**
 * amount_details_line_item_payment_method_options_param
 */
final class MethodOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\LineItemsRequest2Variant1Item\PaymentMethodOptions\OptionsCardRequest $card;
    public \StripeSDK\Requests\LineItemsRequest2Variant1Item\PaymentMethodOptions\CardPresentRequest $card_present;
    public \StripeSDK\Requests\LineItemsRequest2Variant1Item\PaymentMethodOptions\OptionsKlarnaRequest $klarna;
    public \StripeSDK\Requests\LineItemsRequest2Variant1Item\PaymentMethodOptions\OptionsPaypalRequest $paypal;
}
