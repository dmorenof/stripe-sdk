<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post;

/**
 * custom_text_param
 *
 * Display additional text for your customers using custom text. You can't set this parameter if `ui_mode` is `elements`.
 */
final class CustomTextRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\CustomText\AfterSubmitRequest $after_submit;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\CustomText\ShippingAddressRequest $shipping_address;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\CustomText\TextSubmitRequest $submit;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\CustomText\ServiceAcceptanceRequest $terms_of_service_acceptance;
}
