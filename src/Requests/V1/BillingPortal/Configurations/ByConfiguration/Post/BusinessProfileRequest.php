<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post;

/**
 * business_profile_update_param
 *
 * The business information shown to customers in the portal.
 */
final class BusinessProfileRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\BusinessProfile\ProfileHeadlineRequest $headline;
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\BusinessProfile\PolicyUrlRequest $privacy_policy_url;
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\BusinessProfile\ServiceUrlRequest $terms_of_service_url;
}
