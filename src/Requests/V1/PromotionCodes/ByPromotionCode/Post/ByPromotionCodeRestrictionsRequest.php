<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PromotionCodes\ByPromotionCode\Post;

/**
 * restrictions_params
 *
 * Settings that restrict the redemption of the promotion code.
 */
final class ByPromotionCodeRestrictionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PromotionCodes\ByPromotionCode\Post\Restrictions\OptionsMapRequest $currency_options;
}
