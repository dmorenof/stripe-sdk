<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Post;

/**
 * preferences_param
 *
 * Information on whether this personalization design is used to create cards when one is not specified.
 */
final class ByPersonalizationDesignPreferencesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'is_default',
    ];

    public bool $is_default;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'is_default' => is_bool($value) ? $this->is_default = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
