<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Person
 *
 * This is an object representing a person associated with a Stripe account.
 *
 * A platform can only access a subset of data in a person for an account where [account.controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `stripe`, which includes Standard and Express accounts, after creating an Account Link or Account Session to start Connect onboarding.
 *
 * See the [Standard onboarding](/connect/standard-accounts) or [Express onboarding](/connect/express-accounts) documentation for information about prefilling information and account onboarding steps. Learn more about [handling identity verification with the API](/connect/handling-api-verification#person-information).
 */
final class Person extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account',
        'created',
        'id',
        'object_',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'account' => [
            'maxLength' => 5000,
        ],
        'email' => [
            'maxLength' => 5000,
        ],
        'first_name' => [
            'maxLength' => 5000,
        ],
        'first_name_kana' => [
            'maxLength' => 5000,
        ],
        'first_name_kanji' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'last_name' => [
            'maxLength' => 5000,
        ],
        'last_name_kana' => [
            'maxLength' => 5000,
        ],
        'last_name_kanji' => [
            'maxLength' => 5000,
        ],
        'maiden_name' => [
            'maxLength' => 5000,
        ],
        'nationality' => [
            'maxLength' => 5000,
        ],
        'phone' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The account the person is associated with.
     */
    public string $account {
        set {
            $this->assigning('account', $value);
            $this->account = $value;
        }
    }
    public \StripeSDK\DTOs\Person\AdditionalTosAcceptances $additional_tos_acceptances;
    public \StripeSDK\DTOs\Address $address;
    public ?\StripeSDK\DTOs\LegalEntity\JapanAddress $address_kana;
    public ?\StripeSDK\DTOs\LegalEntity\JapanAddress $address_kanji;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    public \StripeSDK\DTOs\LegalEntity\Dob $dob;
    /**
     * The person's email address. Also available for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `stripe`.
     */
    public ?string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * The person's first name. Also available for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `stripe`.
     */
    public ?string $first_name {
        set {
            $this->assigning('first_name', $value);
            $this->first_name = $value;
        }
    }
    /**
     * The Kana variation of the person's first name (Japan only). Also available for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `stripe`.
     */
    public ?string $first_name_kana {
        set {
            $this->assigning('first_name_kana', $value);
            $this->first_name_kana = $value;
        }
    }
    /**
     * The Kanji variation of the person's first name (Japan only). Also available for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `stripe`.
     */
    public ?string $first_name_kanji {
        set {
            $this->assigning('first_name_kanji', $value);
            $this->first_name_kanji = $value;
        }
    }
    /**
     * A list of alternate names or aliases that the person is known by. Also available for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `stripe`.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $full_name_aliases;
    public ?\StripeSDK\DTOs\Person\FutureRequirements $future_requirements;
    /**
     * The person's gender.
     */
    public ?string $gender;
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
     * Whether the person's `id_number` was provided. True if either the full ID number was provided or if only the required part of the ID number was provided (ex. last four of an individual's SSN for the US indicated by `ssn_last_4_provided`).
     */
    public bool $id_number_provided;
    /**
     * Whether the person's `id_number_secondary` was provided.
     */
    public bool $id_number_secondary_provided;
    /**
     * The person's last name. Also available for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `stripe`.
     */
    public ?string $last_name {
        set {
            $this->assigning('last_name', $value);
            $this->last_name = $value;
        }
    }
    /**
     * The Kana variation of the person's last name (Japan only). Also available for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `stripe`.
     */
    public ?string $last_name_kana {
        set {
            $this->assigning('last_name_kana', $value);
            $this->last_name_kana = $value;
        }
    }
    /**
     * The Kanji variation of the person's last name (Japan only). Also available for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `stripe`.
     */
    public ?string $last_name_kanji {
        set {
            $this->assigning('last_name_kanji', $value);
            $this->last_name_kanji = $value;
        }
    }
    /**
     * The person's maiden name.
     */
    public ?string $maiden_name {
        set {
            $this->assigning('maiden_name', $value);
            $this->maiden_name = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Person\MetadataMap $metadata;
    /**
     * The country where the person is a national.
     */
    public ?string $nationality {
        set {
            $this->assigning('nationality', $value);
            $this->nationality = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Person\ObjectEnum $object_;
    /**
     * The person's phone number.
     */
    public ?string $phone {
        set {
            $this->assigning('phone', $value);
            $this->phone = $value;
        }
    }
    /**
     * Indicates if the person or any of their representatives, family members, or other closely related persons, declares that they hold or have held an important public job or function, in any jurisdiction.
     */
    public \StripeSDK\Enums\Person\PoliticalExposureEnum $political_exposure;
    public \StripeSDK\DTOs\Address $registered_address;
    public \StripeSDK\DTOs\Person\Relationship $relationship;
    public ?\StripeSDK\DTOs\Person\Requirements $requirements;
    /**
     * Whether the last four digits of the person's Social Security number have been provided (U.S. only).
     */
    public bool $ssn_last_4_provided;
    /**
     * Demographic data related to the person.
     */
    public ?\StripeSDK\DTOs\Person\UsCfpbData $us_cfpb_data;
    public \StripeSDK\DTOs\LegalEntity\PersonVerification $verification;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account' => is_string($value) ? $this->account = $value : parent::assignMember($name, $value),
            'additional_tos_acceptances' => $value instanceof \stdClass ? $this->additional_tos_acceptances = new \StripeSDK\DTOs\Person\AdditionalTosAcceptances($value) : parent::assignMember($name, $value),
            'address' => $value instanceof \stdClass ? $this->address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'address_kana' => $value === null || $value instanceof \stdClass ? $this->address_kana = $value === null ? null : new \StripeSDK\DTOs\LegalEntity\JapanAddress($value) : parent::assignMember($name, $value),
            'address_kanji' => $value === null || $value instanceof \stdClass ? $this->address_kanji = $value === null ? null : new \StripeSDK\DTOs\LegalEntity\JapanAddress($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'dob' => $value instanceof \stdClass ? $this->dob = new \StripeSDK\DTOs\LegalEntity\Dob($value) : parent::assignMember($name, $value),
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'first_name' => $value === null || is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'first_name_kana' => $value === null || is_string($value) ? $this->first_name_kana = $value : parent::assignMember($name, $value),
            'first_name_kanji' => $value === null || is_string($value) ? $this->first_name_kanji = $value : parent::assignMember($name, $value),
            'full_name_aliases' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->full_name_aliases = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'future_requirements' => $value === null || $value instanceof \stdClass ? $this->future_requirements = $value === null ? null : new \StripeSDK\DTOs\Person\FutureRequirements($value) : parent::assignMember($name, $value),
            'gender' => $value === null || is_string($value) ? $this->gender = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'id_number_provided' => is_bool($value) ? $this->id_number_provided = $value : parent::assignMember($name, $value),
            'id_number_secondary_provided' => is_bool($value) ? $this->id_number_secondary_provided = $value : parent::assignMember($name, $value),
            'last_name' => $value === null || is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'last_name_kana' => $value === null || is_string($value) ? $this->last_name_kana = $value : parent::assignMember($name, $value),
            'last_name_kanji' => $value === null || is_string($value) ? $this->last_name_kanji = $value : parent::assignMember($name, $value),
            'maiden_name' => $value === null || is_string($value) ? $this->maiden_name = $value : parent::assignMember($name, $value),
            'nationality' => $value === null || is_string($value) ? $this->nationality = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Person\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'phone' => $value === null || is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'political_exposure' => is_string($value) ? $this->political_exposure = \StripeSDK\Enums\Person\PoliticalExposureEnum::from($value) : parent::assignMember($name, $value),
            'registered_address' => $value instanceof \stdClass ? $this->registered_address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'relationship' => $value instanceof \stdClass ? $this->relationship = new \StripeSDK\DTOs\Person\Relationship($value) : parent::assignMember($name, $value),
            'requirements' => $value === null || $value instanceof \stdClass ? $this->requirements = $value === null ? null : new \StripeSDK\DTOs\Person\Requirements($value) : parent::assignMember($name, $value),
            'ssn_last_4_provided' => is_bool($value) ? $this->ssn_last_4_provided = $value : parent::assignMember($name, $value),
            'us_cfpb_data' => $value === null || $value instanceof \stdClass ? $this->us_cfpb_data = $value === null ? null : new \StripeSDK\DTOs\Person\UsCfpbData($value) : parent::assignMember($name, $value),
            'verification' => $value instanceof \stdClass ? $this->verification = new \StripeSDK\DTOs\LegalEntity\PersonVerification($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
