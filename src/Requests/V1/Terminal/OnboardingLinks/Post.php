<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\OnboardingLinks;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'link_options',
        'link_type',
    ];

    protected const array VALIDATION = [
        'on_behalf_of' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Specific fields needed to generate the desired link type.
     */
    public \StripeSDK\Requests\V1\Terminal\OnboardingLinks\Post\LinkOptionsRequest $link_options;
    /**
     * The type of link being generated.
     */
    public \StripeSDK\Enums\V1\Terminal\OnboardingLinks\Post\LinkTypeEnum $link_type;
    /**
     * Stripe account ID to generate the link for.
     */
    public string $on_behalf_of {
        set {
            $this->assigning('on_behalf_of', $value);
            $this->on_behalf_of = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'link_type' => is_string($value) ? $this->link_type = \StripeSDK\Enums\V1\Terminal\OnboardingLinks\Post\LinkTypeEnum::from($value) : parent::assignMember($name, $value),
            'on_behalf_of' => is_string($value) ? $this->on_behalf_of = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
