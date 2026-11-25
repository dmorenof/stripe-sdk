<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Configurations\Post;

/**
 * business_profile_create_param
 *
 * The business information shown to customers in the portal.
 */
final class BusinessProfileRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\Post\BusinessProfile\ProfileHeadlineRequest $headline;
    public string $privacy_policy_url;
    public string $terms_of_service_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'privacy_policy_url' => is_string($value) ? $this->privacy_policy_url = $value : parent::assignMember($name, $value),
            'terms_of_service_url' => is_string($value) ? $this->terms_of_service_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
