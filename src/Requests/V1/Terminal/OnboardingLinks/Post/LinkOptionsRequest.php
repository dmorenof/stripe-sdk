<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\OnboardingLinks\Post;

/**
 * link_options_params
 *
 * Specific fields needed to generate the desired link type.
 */
final class LinkOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Terminal\OnboardingLinks\Post\LinkOptions\AndConditionsRequest $apple_terms_and_conditions;
}
