<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingPersonalizationDesignRejectionReasons
 */
final class PersonalizationDesignRejectionReasons extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The reason(s) the card logo was rejected.
     */
    public ?\StripeSDK\Collections\Issuing\PersonalizationDesignRejectionReasons\CardLogoCollection $card_logo;
    /**
     * The reason(s) the carrier text was rejected.
     */
    public ?\StripeSDK\Collections\Issuing\PersonalizationDesignRejectionReasons\CarrierTextCollection $carrier_text;
}
