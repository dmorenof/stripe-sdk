<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesPrivateCardPaymentMethodOptionsResourceRestrictions
 */
final class PagesPrivateCardPaymentMethodOptionsResourceRestrictions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The card brands to block. If a customer enters or selects a card belonging to a blocked brand, they can't complete the payment.
     */
    public \StripeSDK\Collections\Payment\PagesPrivateCardPaymentMethodOptionsResourceRestrictions\BrandsBlockedCollection $brands_blocked;
    /**
     * Card funding types to block for this Checkout Session. Supported values are `credit`, `debit`, and `prepaid`.
     */
    public \StripeSDK\Collections\Payment\PagesPrivateCardPaymentMethodOptionsResourceRestrictions\TypesBlockedCollection $funding_types_blocked;
}
