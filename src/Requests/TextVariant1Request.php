<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * carrier_text_param
 */
final class TextVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\CarrierTextRequestVariant1\FooterBodyRequest $footer_body;
    public \StripeSDK\Requests\CarrierTextRequestVariant1\FooterTitleRequest $footer_title;
    public \StripeSDK\Requests\CarrierTextRequestVariant1\HeaderBodyRequest $header_body;
    public \StripeSDK\Requests\CarrierTextRequestVariant1\HeaderTitleRequest $header_title;
}
