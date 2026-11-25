<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Identity\VerificationSessions;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'client_reference_id' => [
            'maxLength' => 5000,
        ],
        'related_customer' => [
            'maxLength' => 5000,
        ],
        'related_customer_account' => [
            'maxLength' => 5000,
        ],
        'verification_flow' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A string to reference this user. This can be a customer ID, a session ID, or similar, and can be used to reconcile this verification with your internal systems.
     */
    public string $client_reference_id {
        set {
            $this->assigning('client_reference_id', $value);
            $this->client_reference_id = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Identity\VerificationSessions\Post\MetadataMapRequest $metadata;
    /**
     * A set of options for the session’s verification checks.
     */
    public \StripeSDK\Requests\V1\Identity\VerificationSessions\Post\VerificationSessionsOptionsRequest $options;
    /**
     * Details provided about the user being verified. These details might be shown to the user.
     */
    public \StripeSDK\Requests\V1\Identity\VerificationSessions\Post\ProvidedDetailsRequest $provided_details;
    /**
     * Customer ID
     */
    public string $related_customer {
        set {
            $this->assigning('related_customer', $value);
            $this->related_customer = $value;
        }
    }
    /**
     * The ID of the Account representing a customer.
     */
    public string $related_customer_account {
        set {
            $this->assigning('related_customer_account', $value);
            $this->related_customer_account = $value;
        }
    }
    /**
     * Tokens referencing a Person resource and its associated account.
     */
    public \StripeSDK\Requests\V1\Identity\VerificationSessions\Post\RelatedPersonRequest $related_person;
    /**
     * The URL that the user will be redirected to upon completing the verification flow.
     */
    public string $return_url;
    /**
     * The type of [verification check](https://docs.stripe.com/identity/verification-checks) to be performed. You must provide a `type` if not passing `verification_flow`.
     */
    public \StripeSDK\Enums\V1\Identity\VerificationSessions\Post\VerificationSessionsTypeEnum $type;
    /**
     * The ID of a verification flow from the Dashboard. See https://docs.stripe.com/identity/verification-flows.
     */
    public string $verification_flow {
        set {
            $this->assigning('verification_flow', $value);
            $this->verification_flow = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'client_reference_id' => is_string($value) ? $this->client_reference_id = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'related_customer' => is_string($value) ? $this->related_customer = $value : parent::assignMember($name, $value),
            'related_customer_account' => is_string($value) ? $this->related_customer_account = $value : parent::assignMember($name, $value),
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Identity\VerificationSessions\Post\VerificationSessionsTypeEnum::from($value) : parent::assignMember($name, $value),
            'verification_flow' => is_string($value) ? $this->verification_flow = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
