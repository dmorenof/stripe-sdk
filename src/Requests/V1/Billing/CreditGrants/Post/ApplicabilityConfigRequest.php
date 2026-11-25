<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Billing\CreditGrants\Post;

/**
 * applicability_config_param
 *
 * Configuration specifying what this credit grant applies to. We currently only support `metered` prices that have a [Billing Meter](https://docs.stripe.com/api/billing/meter) attached to them.
 */
final class ApplicabilityConfigRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'scope',
    ];

    public \StripeSDK\Requests\V1\Billing\CreditGrants\Post\ApplicabilityConfig\ConfigScopeRequest $scope;
}
