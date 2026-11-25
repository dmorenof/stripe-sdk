<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalBusinessProfile
 */
final class BusinessProfile extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'headline' => [
            'maxLength' => 5000,
        ],
        'privacy_policy_url' => [
            'maxLength' => 5000,
        ],
        'terms_of_service_url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The messaging shown to customers in the portal.
     */
    public ?string $headline {
        set {
            $this->assigning('headline', $value);
            $this->headline = $value;
        }
    }
    /**
     * A link to the business’s publicly available privacy policy.
     */
    public ?string $privacy_policy_url {
        set {
            $this->assigning('privacy_policy_url', $value);
            $this->privacy_policy_url = $value;
        }
    }
    /**
     * A link to the business’s publicly available terms of service.
     */
    public ?string $terms_of_service_url {
        set {
            $this->assigning('terms_of_service_url', $value);
            $this->terms_of_service_url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'headline' => $value === null || is_string($value) ? $this->headline = $value : parent::assignMember($name, $value),
            'privacy_policy_url' => $value === null || is_string($value) ? $this->privacy_policy_url = $value : parent::assignMember($name, $value),
            'terms_of_service_url' => $value === null || is_string($value) ? $this->terms_of_service_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
