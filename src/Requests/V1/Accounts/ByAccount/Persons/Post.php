<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Persons;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'first_name' => [
            'maxLength' => 5000,
        ],
        'first_name_kana' => [
            'maxLength' => 5000,
        ],
        'first_name_kanji' => [
            'maxLength' => 5000,
        ],
        'id_number' => [
            'maxLength' => 5000,
        ],
        'id_number_secondary' => [
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
        'person_token' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Details on the legal guardian's or authorizer's acceptance of the required Stripe agreements.
     */
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post\TosAcceptancesRequest $additional_tos_acceptances;
    /**
     * The person's address.
     */
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post\PersonsAddressRequest $address;
    /**
     * The Kana variation of the person's address (Japan only).
     */
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post\AddressKanaRequest $address_kana;
    /**
     * The Kanji variation of the person's address (Japan only).
     */
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post\AddressKanjiRequest $address_kanji;
    /**
     * The person's date of birth.
     */
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post\PersonsDobRequest $dob;
    /**
     * Documents that may be submitted to satisfy various informational requests.
     */
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post\PersonsDocumentsRequest $documents;
    /**
     * The person's email address.
     */
    public string $email;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The person's first name.
     */
    public string $first_name {
        set {
            $this->assigning('first_name', $value);
            $this->first_name = $value;
        }
    }
    /**
     * The Kana variation of the person's first name (Japan only).
     */
    public string $first_name_kana {
        set {
            $this->assigning('first_name_kana', $value);
            $this->first_name_kana = $value;
        }
    }
    /**
     * The Kanji variation of the person's first name (Japan only).
     */
    public string $first_name_kanji {
        set {
            $this->assigning('first_name_kanji', $value);
            $this->first_name_kanji = $value;
        }
    }
    /**
     * A list of alternate names or aliases that the person is known by.
     */
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post\NameAliasesRequest $full_name_aliases;
    /**
     * The person's gender (International regulations require either "male" or "female").
     */
    public string $gender;
    /**
     * The person's ID number, as appropriate for their country. For example, a social security number in the U.S., social insurance number in Canada, etc. Instead of the number itself, you can also provide a [PII token provided by Stripe.js](https://docs.stripe.com/js/tokens/create_token?type=pii).
     *
     * Changing this value for the account's representative requires that the account re-accept the [terms of service](/api/accounts/object#account_object-tos_acceptance).
     */
    public string $id_number {
        set {
            $this->assigning('id_number', $value);
            $this->id_number = $value;
        }
    }
    /**
     * The person's secondary ID number, as appropriate for their country, will be used for enhanced verification checks. In Thailand, this would be the laser code found on the back of an ID card. Instead of the number itself, you can also provide a [PII token provided by Stripe.js](https://docs.stripe.com/js/tokens/create_token?type=pii).
     *
     * Changing this value for the account's representative requires that the account re-accept the [terms of service](/api/accounts/object#account_object-tos_acceptance).
     */
    public string $id_number_secondary {
        set {
            $this->assigning('id_number_secondary', $value);
            $this->id_number_secondary = $value;
        }
    }
    /**
     * The person's last name.
     */
    public string $last_name {
        set {
            $this->assigning('last_name', $value);
            $this->last_name = $value;
        }
    }
    /**
     * The Kana variation of the person's last name (Japan only).
     */
    public string $last_name_kana {
        set {
            $this->assigning('last_name_kana', $value);
            $this->last_name_kana = $value;
        }
    }
    /**
     * The Kanji variation of the person's last name (Japan only).
     */
    public string $last_name_kanji {
        set {
            $this->assigning('last_name_kanji', $value);
            $this->last_name_kanji = $value;
        }
    }
    /**
     * The person's maiden name.
     */
    public string $maiden_name {
        set {
            $this->assigning('maiden_name', $value);
            $this->maiden_name = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post\PersonsMetadataRequest $metadata;
    /**
     * The country where the person is a national. Two-letter country code ([ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)), or "XX" if unavailable.
     */
    public string $nationality {
        set {
            $this->assigning('nationality', $value);
            $this->nationality = $value;
        }
    }
    /**
     * A [person token](https://docs.stripe.com/connect/account-tokens), used to securely provide details to the person.
     */
    public string $person_token {
        set {
            $this->assigning('person_token', $value);
            $this->person_token = $value;
        }
    }
    /**
     * The person's phone number.
     */
    public string $phone;
    /**
     * Indicates if the person or any of their representatives, family members, or other closely related persons, declares that they hold or have held an important public job or function, in any jurisdiction.
     */
    public \StripeSDK\Enums\V1\Accounts\ByAccount\Persons\Post\PoliticalExposureEnum $political_exposure;
    /**
     * The person's registered address.
     */
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post\RegisteredAddressRequest $registered_address;
    /**
     * The relationship that this person has with the account's legal entity.
     */
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post\PersonsRelationshipRequest $relationship;
    /**
     * The last four digits of the person's Social Security number (U.S. only).
     *
     * Changing this value for the account's representative requires that the account re-accept the [terms of service](/api/accounts/object#account_object-tos_acceptance).
     */
    public string $ssn_last_4;
    /**
     * Demographic data related to the person.
     */
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post\CfpbDataRequest $us_cfpb_data;
    /**
     * The person's verification status.
     */
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post\PersonsVerificationRequest $verification;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'first_name_kana' => is_string($value) ? $this->first_name_kana = $value : parent::assignMember($name, $value),
            'first_name_kanji' => is_string($value) ? $this->first_name_kanji = $value : parent::assignMember($name, $value),
            'gender' => is_string($value) ? $this->gender = $value : parent::assignMember($name, $value),
            'id_number' => is_string($value) ? $this->id_number = $value : parent::assignMember($name, $value),
            'id_number_secondary' => is_string($value) ? $this->id_number_secondary = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'last_name_kana' => is_string($value) ? $this->last_name_kana = $value : parent::assignMember($name, $value),
            'last_name_kanji' => is_string($value) ? $this->last_name_kanji = $value : parent::assignMember($name, $value),
            'maiden_name' => is_string($value) ? $this->maiden_name = $value : parent::assignMember($name, $value),
            'nationality' => is_string($value) ? $this->nationality = $value : parent::assignMember($name, $value),
            'person_token' => is_string($value) ? $this->person_token = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'political_exposure' => is_string($value) ? $this->political_exposure = \StripeSDK\Enums\V1\Accounts\ByAccount\Persons\Post\PoliticalExposureEnum::from($value) : parent::assignMember($name, $value),
            'ssn_last_4' => is_string($value) ? $this->ssn_last_4 = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
