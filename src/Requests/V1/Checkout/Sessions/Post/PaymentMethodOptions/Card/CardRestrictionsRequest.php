<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card;

/**
 * restrictions_param
 */
final class CardRestrictionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\Restrictions\BrandsBlockedCollection $brands_blocked;
    public \StripeSDK\Collections\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\Restrictions\TypesBlockedCollection $funding_types_blocked;
}
