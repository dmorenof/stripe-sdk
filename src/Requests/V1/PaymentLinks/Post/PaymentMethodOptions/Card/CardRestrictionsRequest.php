<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\Post\PaymentMethodOptions\Card;

/**
 * card_restrictions_params
 */
final class CardRestrictionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\V1\PaymentLinks\Post\PaymentMethodOptions\Card\Restrictions\BrandsBlockedCollection $brands_blocked;
}
