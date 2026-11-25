<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceCardRestrictions
 */
final class LinksResourceCardRestrictions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'brands_blocked',
    ];

    /**
     * The card brands to block. If a customer enters or selects a card belonging to a blocked brand, they can't complete the payment.
     */
    public \StripeSDK\Collections\Payment\LinksResourceCardRestrictions\BrandsBlockedCollection $brands_blocked;
}
