<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\Post;

/**
 * carrier_text_param
 *
 * Hash containing carrier text, for use with physical bundles that support carrier text.
 */
final class CarrierTextRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\Post\CarrierText\FooterBodyRequest $footer_body;
    public \StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\Post\CarrierText\FooterTitleRequest $footer_title;
    public \StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\Post\CarrierText\HeaderBodyRequest $header_body;
    public \StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\Post\CarrierText\HeaderTitleRequest $header_title;
}
