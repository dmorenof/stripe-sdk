<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Terminal;

/**
 * Onboarding Link
 *
 * Returns redirect links used for onboarding onto Tap to Pay on iPhone.
 */
final class OnboardingLink extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'link_options',
        'link_type',
        'object_',
        'redirect_url',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'on_behalf_of' => [
            'maxLength' => 5000,
        ],
        'redirect_url' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\TerminalOnboardingLinkLinkOptions $link_options;
    /**
     * The type of link being generated.
     */
    public \StripeSDK\Enums\Terminal\OnboardingLink\LinkTypeEnum $link_type;
    public \StripeSDK\Enums\Terminal\OnboardingLink\ObjectEnum $object_;
    /**
     * Stripe account ID to generate the link for.
     */
    public ?string $on_behalf_of {
        set {
            $this->assigning('on_behalf_of', $value);
            $this->on_behalf_of = $value;
        }
    }
    /**
     * The link passed back to the user for their onboarding.
     */
    public string $redirect_url {
        set {
            $this->assigning('redirect_url', $value);
            $this->redirect_url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'link_options' => $value instanceof \stdClass ? $this->link_options = new \StripeSDK\DTOs\TerminalOnboardingLinkLinkOptions($value) : parent::assignMember($name, $value),
            'link_type' => is_string($value) ? $this->link_type = \StripeSDK\Enums\Terminal\OnboardingLink\LinkTypeEnum::from($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Terminal\OnboardingLink\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'on_behalf_of' => $value === null || is_string($value) ? $this->on_behalf_of = $value : parent::assignMember($name, $value),
            'redirect_url' => is_string($value) ? $this->redirect_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
