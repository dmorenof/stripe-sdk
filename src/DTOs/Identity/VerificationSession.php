<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Identity;

/**
 * VerificationSession
 *
 * A VerificationSession guides you through the process of collecting and verifying the identities
 * of your users. It contains details about the type of verification, such as what [verification
 * check](/docs/identity/verification-checks) to perform. Only create one VerificationSession for
 * each verification in your system.
 *
 * A VerificationSession transitions through [multiple
 * statuses](/docs/identity/how-sessions-work) throughout its lifetime as it progresses through
 * the verification flow. The VerificationSession contains the user's verified data after
 * verification checks are complete.
 *
 * Related guide: [The Verification Sessions API](https://docs.stripe.com/identity/verification-sessions)
 */
final class VerificationSession extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'livemode',
        'metadata',
        'object_',
        'status',
        'type',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'client_reference_id' => [
            'maxLength' => 5000,
        ],
        'client_secret' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'related_customer' => [
            'maxLength' => 5000,
        ],
        'related_customer_account' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 5000,
        ],
        'verification_flow' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A string to reference this user. This can be a customer ID, a session ID, or similar, and can be used to reconcile this verification with your internal systems.
     */
    public ?string $client_reference_id {
        set {
            $this->assigning('client_reference_id', $value);
            $this->client_reference_id = $value;
        }
    }
    /**
     * The short-lived client secret used by Stripe.js to [show a verification modal](https://docs.stripe.com/js/identity/modal) inside your app. This client secret expires after 24 hours and can only be used once. Don’t store it, log it, embed it in a URL, or expose it to anyone other than the user. Make sure that you have TLS enabled on any page that includes the client secret. Refer to our docs on [passing the client secret to the frontend](https://docs.stripe.com/identity/verification-sessions#client-secret) to learn more.
     */
    public ?string $client_secret {
        set {
            $this->assigning('client_secret', $value);
            $this->client_secret = $value;
        }
    }
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * If present, this property tells you the last error encountered when processing the verification.
     */
    public ?\StripeSDK\DTOs\Gelato\SessionLastError $last_error;
    /**
     * ID of the most recent VerificationReport. [Learn more about accessing detailed verification results.](https://docs.stripe.com/identity/verification-sessions#results)
     */
    public ?\StripeSDK\DTOs\Identity\VerificationSession\VerificationReportDTO $last_verification_report;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Identity\VerificationSession\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Identity\VerificationSession\ObjectEnum $object_;
    /**
     * A set of options for the session’s verification checks.
     */
    public ?\StripeSDK\DTOs\Gelato\VerificationSessionOptions $options;
    /**
     * Details provided about the user being verified. These details may be shown to the user.
     */
    public ?\StripeSDK\DTOs\Gelato\ProvidedDetails $provided_details;
    /**
     * Redaction status of this VerificationSession. If the VerificationSession is not redacted, this field will be null.
     */
    public ?\StripeSDK\DTOs\VerificationSessionRedaction $redaction;
    /**
     * Customer ID
     */
    public ?string $related_customer {
        set {
            $this->assigning('related_customer', $value);
            $this->related_customer = $value;
        }
    }
    /**
     * The ID of the Account representing a customer.
     */
    public ?string $related_customer_account {
        set {
            $this->assigning('related_customer_account', $value);
            $this->related_customer_account = $value;
        }
    }
    public \StripeSDK\DTOs\Gelato\RelatedPerson $related_person;
    /**
     * Status of this VerificationSession. [Learn more about the lifecycle of sessions](https://docs.stripe.com/identity/how-sessions-work).
     */
    public \StripeSDK\Enums\Identity\VerificationSession\StatusEnum $status;
    /**
     * The type of [verification check](https://docs.stripe.com/identity/verification-checks) to be performed.
     */
    public \StripeSDK\Enums\Identity\VerificationSession\TypeEnum $type;
    /**
     * The short-lived URL that you use to redirect a user to Stripe to submit their identity information. This URL expires after 48 hours and can only be used once. Don’t store it, log it, send it in emails or expose it to anyone other than the user. Refer to our docs on [verifying identity documents](https://docs.stripe.com/identity/verify-identity-documents?platform=web&type=redirect) to learn how to redirect users to Stripe.
     */
    public ?string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }
    /**
     * The configuration token of a verification flow from the dashboard.
     */
    public string $verification_flow {
        set {
            $this->assigning('verification_flow', $value);
            $this->verification_flow = $value;
        }
    }
    /**
     * The user’s verified data.
     */
    public ?\StripeSDK\DTOs\Gelato\VerifiedOutputs $verified_outputs;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'client_reference_id' => $value === null || is_string($value) ? $this->client_reference_id = $value : parent::assignMember($name, $value),
            'client_secret' => $value === null || is_string($value) ? $this->client_secret = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'last_error' => $value === null || $value instanceof \stdClass ? $this->last_error = $value === null ? null : new \StripeSDK\DTOs\Gelato\SessionLastError($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Identity\VerificationSession\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'options' => $value === null || $value instanceof \stdClass ? $this->options = $value === null ? null : new \StripeSDK\DTOs\Gelato\VerificationSessionOptions($value) : parent::assignMember($name, $value),
            'provided_details' => $value === null || $value instanceof \stdClass ? $this->provided_details = $value === null ? null : new \StripeSDK\DTOs\Gelato\ProvidedDetails($value) : parent::assignMember($name, $value),
            'redaction' => $value === null || $value instanceof \stdClass ? $this->redaction = $value === null ? null : new \StripeSDK\DTOs\VerificationSessionRedaction($value) : parent::assignMember($name, $value),
            'related_customer' => $value === null || is_string($value) ? $this->related_customer = $value : parent::assignMember($name, $value),
            'related_customer_account' => $value === null || is_string($value) ? $this->related_customer_account = $value : parent::assignMember($name, $value),
            'related_person' => $value instanceof \stdClass ? $this->related_person = new \StripeSDK\DTOs\Gelato\RelatedPerson($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Identity\VerificationSession\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Identity\VerificationSession\TypeEnum::from($value) : parent::assignMember($name, $value),
            'url' => $value === null || is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'verification_flow' => is_string($value) ? $this->verification_flow = $value : parent::assignMember($name, $value),
            'verified_outputs' => $value === null || $value instanceof \stdClass ? $this->verified_outputs = $value === null ? null : new \StripeSDK\DTOs\Gelato\VerifiedOutputs($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
