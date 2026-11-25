<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\SetupIntentData;

/**
 * setup_intent_data_param
 *
 * A subset of parameters to be passed to SetupIntent creation for Checkout Sessions in `setup` mode.
 */
final class IntentDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 1000,
        ],
    ];

    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\SetupIntentData\MetadataMapRequest $metadata;
    public string $on_behalf_of;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'on_behalf_of' => is_string($value) ? $this->on_behalf_of = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
