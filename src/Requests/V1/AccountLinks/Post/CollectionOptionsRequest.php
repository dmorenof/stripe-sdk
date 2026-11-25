<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\AccountLinks\Post;

/**
 * collection_options_params
 *
 * Specifies the requirements that Stripe collects from connected accounts in the Connect Onboarding flow.
 */
final class CollectionOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\AccountLinks\Post\CollectionOptions\OptionsFieldsEnum $fields;
    public \StripeSDK\Enums\V1\AccountLinks\Post\CollectionOptions\FutureRequirementsEnum $future_requirements;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fields' => is_string($value) ? $this->fields = \StripeSDK\Enums\V1\AccountLinks\Post\CollectionOptions\OptionsFieldsEnum::from($value) : parent::assignMember($name, $value),
            'future_requirements' => is_string($value) ? $this->future_requirements = \StripeSDK\Enums\V1\AccountLinks\Post\CollectionOptions\FutureRequirementsEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
