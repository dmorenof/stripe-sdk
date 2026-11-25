<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ThreeDSecure\Authentications\ByAuthentication\Submit;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'fingerprinting_result' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The fingerprinting result of the issuer fingerprinting step.
     *
     * Refer to the [Issuer fingerprinting section of the Standalone 3DS guide](/payments/3d-secure/standalone-3d-secure#issuer-fingerprinting) for more information.
     */
    public string $fingerprinting_result {
        set {
            $this->assigning('fingerprinting_result', $value);
            $this->fingerprinting_result = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\ByAuthentication\Submit\Post\SubmitMetadataRequest $metadata;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'fingerprinting_result' => is_string($value) ? $this->fingerprinting_result = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
