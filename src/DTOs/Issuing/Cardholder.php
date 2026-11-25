<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * Cardholder
 *
 * An Issuing `Cardholder` object represents an individual or business entity who is [issued](https://docs.stripe.com/issuing) cards.
 *
 * Related guide: [How to create a cardholder](https://docs.stripe.com/issuing/cards/virtual/issue-cards#create-cardholder)
 */
final class Cardholder extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'billing',
        'created',
        'id',
        'livemode',
        'metadata',
        'name',
        'object_',
        'requirements',
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
        'email' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'phone_number' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Issuing\CardholderAddress $billing;
    /**
     * Additional information about a `company` cardholder.
     */
    public ?\StripeSDK\DTOs\Issuing\CardholderCompany $company;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The cardholder's email address.
     */
    public ?string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
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
     * Additional information about an `individual` cardholder.
     */
    public ?\StripeSDK\DTOs\Issuing\CardholderIndividual $individual;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Issuing\Cardholder\MetadataMap $metadata;
    /**
     * The cardholder's name. This will be printed on cards issued to them.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Issuing\Cardholder\ObjectEnum $object_;
    /**
     * The cardholder's phone number. This is required for all cardholders who will be creating EU cards. See the [3D Secure documentation](https://docs.stripe.com/issuing/3d-secure#when-is-3d-secure-applied) for more details.
     */
    public ?string $phone_number {
        set {
            $this->assigning('phone_number', $value);
            $this->phone_number = $value;
        }
    }
    /**
     * The cardholder’s preferred locales (languages), ordered by preference. Locales can be `de`, `en`, `es`, `fr`, or `it`.
     *  This changes the language of the [3D Secure flow](https://docs.stripe.com/issuing/3d-secure) and one-time password messages sent to the cardholder.
     */
    public ?\StripeSDK\Collections\Issuing\Cardholder\PreferredLocalesCollection $preferred_locales;
    public \StripeSDK\DTOs\Issuing\CardholderRequirements $requirements;
    /**
     * Rules that control spending across this cardholder's cards. Refer to our [documentation](https://docs.stripe.com/issuing/controls/spending-controls) for more details.
     */
    public ?\StripeSDK\DTOs\Issuing\CardholderAuthorizationControls $spending_controls;
    /**
     * Specifies whether to permit authorizations on this cardholder's cards.
     */
    public \StripeSDK\Enums\Issuing\Cardholder\StatusEnum $status;
    /**
     * One of `individual` or `company`. See [Choose a cardholder type](https://docs.stripe.com/issuing/other/choose-cardholder) for more details.
     */
    public \StripeSDK\Enums\Issuing\Cardholder\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing' => $value instanceof \stdClass ? $this->billing = new \StripeSDK\DTOs\Issuing\CardholderAddress($value) : parent::assignMember($name, $value),
            'company' => $value === null || $value instanceof \stdClass ? $this->company = $value === null ? null : new \StripeSDK\DTOs\Issuing\CardholderCompany($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'individual' => $value === null || $value instanceof \stdClass ? $this->individual = $value === null ? null : new \StripeSDK\DTOs\Issuing\CardholderIndividual($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Issuing\Cardholder\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'phone_number' => $value === null || is_string($value) ? $this->phone_number = $value : parent::assignMember($name, $value),
            'requirements' => $value instanceof \stdClass ? $this->requirements = new \StripeSDK\DTOs\Issuing\CardholderRequirements($value) : parent::assignMember($name, $value),
            'spending_controls' => $value === null || $value instanceof \stdClass ? $this->spending_controls = $value === null ? null : new \StripeSDK\DTOs\Issuing\CardholderAuthorizationControls($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Issuing\Cardholder\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Issuing\Cardholder\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
