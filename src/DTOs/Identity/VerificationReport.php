<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Identity;

/**
 * VerificationReport
 *
 * A VerificationReport is the result of an attempt to collect and verify data from a user.
 * The collection of verification checks performed is determined from the `type` and `options`
 * parameters used. You can find the result of each verification check performed in the
 * appropriate sub-resource: `document`, `id_number`, `selfie`.
 *
 * Each VerificationReport contains a copy of any data collected by the user as well as
 * reference IDs which can be used to access collected images through the [FileUpload](https://docs.stripe.com/api/files)
 * API. To configure and create VerificationReports, use the
 * [VerificationSession](https://docs.stripe.com/api/identity/verification_sessions) API.
 *
 * Related guide: [Accessing verification results](https://docs.stripe.com/identity/verification-sessions#results).
 */
final class VerificationReport extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'livemode',
        'object_',
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
        'id' => [
            'maxLength' => 5000,
        ],
        'verification_flow' => [
            'maxLength' => 5000,
        ],
        'verification_session' => [
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
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    public \StripeSDK\DTOs\Gelato\DocumentReport $document;
    public \StripeSDK\DTOs\Gelato\EmailReport $email;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public \StripeSDK\DTOs\Gelato\IdNumberReport $id_number;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Identity\VerificationReport\ObjectEnum $object_;
    public \StripeSDK\DTOs\Gelato\VerificationReportOptions $options;
    public \StripeSDK\DTOs\Gelato\PhoneReport $phone;
    public \StripeSDK\DTOs\Gelato\SelfieReport $selfie;
    /**
     * Type of report.
     */
    public \StripeSDK\Enums\Identity\VerificationReport\TypeEnum $type;
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
     * ID of the VerificationSession that created this report.
     */
    public ?string $verification_session {
        set {
            $this->assigning('verification_session', $value);
            $this->verification_session = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'client_reference_id' => $value === null || is_string($value) ? $this->client_reference_id = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'document' => $value instanceof \stdClass ? $this->document = new \StripeSDK\DTOs\Gelato\DocumentReport($value) : parent::assignMember($name, $value),
            'email' => $value instanceof \stdClass ? $this->email = new \StripeSDK\DTOs\Gelato\EmailReport($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'id_number' => $value instanceof \stdClass ? $this->id_number = new \StripeSDK\DTOs\Gelato\IdNumberReport($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Identity\VerificationReport\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \StripeSDK\DTOs\Gelato\VerificationReportOptions($value) : parent::assignMember($name, $value),
            'phone' => $value instanceof \stdClass ? $this->phone = new \StripeSDK\DTOs\Gelato\PhoneReport($value) : parent::assignMember($name, $value),
            'selfie' => $value instanceof \stdClass ? $this->selfie = new \StripeSDK\DTOs\Gelato\SelfieReport($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Identity\VerificationReport\TypeEnum::from($value) : parent::assignMember($name, $value),
            'verification_flow' => is_string($value) ? $this->verification_flow = $value : parent::assignMember($name, $value),
            'verification_session' => $value === null || is_string($value) ? $this->verification_session = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
