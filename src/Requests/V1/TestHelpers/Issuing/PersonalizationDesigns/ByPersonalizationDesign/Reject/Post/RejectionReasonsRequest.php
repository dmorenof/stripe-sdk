<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Reject\Post;

/**
 * rejection_reasons_param
 *
 * The reason(s) the personalization design was rejected.
 */
final class RejectionReasonsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\V1\TestHelpers\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Reject\Post\RejectionReasons\CardLogoCollection $card_logo;
    public \StripeSDK\Collections\V1\TestHelpers\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Reject\Post\RejectionReasons\CarrierTextCollection $carrier_text;
}
