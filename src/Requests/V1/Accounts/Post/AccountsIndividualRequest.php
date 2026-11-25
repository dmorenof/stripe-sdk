<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post;

/**
 * individual_specs
 *
 * Information about the person represented by the account. This field is null unless `business_type` is set to `individual`. Once you create an [Account Link](/api/account_links) or [Account Session](/api/account_sessions), this property can only be updated for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `application`, which includes Custom accounts.
 */
final class AccountsIndividualRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'first_name' => [
            'maxLength' => 100,
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
            'maxLength' => 100,
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
        'ssn_last_4' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\Accounts\Post\Individual\IndividualAddressRequest $address;
    public \StripeSDK\Requests\V1\Accounts\Post\Individual\AddressKanaRequest $address_kana;
    public \StripeSDK\Requests\V1\Accounts\Post\Individual\AddressKanjiRequest $address_kanji;
    public \StripeSDK\Requests\V1\Accounts\Post\Individual\IndividualDobRequest $dob;
    public string $email;
    public string $first_name {
        set {
            $this->assigning('first_name', $value);
            $this->first_name = $value;
        }
    }
    public string $first_name_kana {
        set {
            $this->assigning('first_name_kana', $value);
            $this->first_name_kana = $value;
        }
    }
    public string $first_name_kanji {
        set {
            $this->assigning('first_name_kanji', $value);
            $this->first_name_kanji = $value;
        }
    }
    public \StripeSDK\Requests\V1\Accounts\Post\Individual\NameAliasesRequest $full_name_aliases;
    public string $gender;
    public string $id_number {
        set {
            $this->assigning('id_number', $value);
            $this->id_number = $value;
        }
    }
    public string $id_number_secondary {
        set {
            $this->assigning('id_number_secondary', $value);
            $this->id_number_secondary = $value;
        }
    }
    public string $last_name {
        set {
            $this->assigning('last_name', $value);
            $this->last_name = $value;
        }
    }
    public string $last_name_kana {
        set {
            $this->assigning('last_name_kana', $value);
            $this->last_name_kana = $value;
        }
    }
    public string $last_name_kanji {
        set {
            $this->assigning('last_name_kanji', $value);
            $this->last_name_kanji = $value;
        }
    }
    public string $maiden_name {
        set {
            $this->assigning('maiden_name', $value);
            $this->maiden_name = $value;
        }
    }
    public \StripeSDK\Requests\V1\Accounts\Post\Individual\IndividualMetadataRequest $metadata;
    public string $phone;
    public \StripeSDK\Enums\V1\Accounts\Post\Individual\PoliticalExposureEnum $political_exposure;
    public \StripeSDK\Requests\V1\Accounts\Post\Individual\RegisteredAddressRequest $registered_address;
    public \StripeSDK\Requests\V1\Accounts\Post\Individual\IndividualRelationshipRequest $relationship;
    public string $ssn_last_4 {
        set {
            $this->assigning('ssn_last_4', $value);
            $this->ssn_last_4 = $value;
        }
    }
    public \StripeSDK\Requests\V1\Accounts\Post\Individual\IndividualVerificationRequest $verification;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
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
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'political_exposure' => is_string($value) ? $this->political_exposure = \StripeSDK\Enums\V1\Accounts\Post\Individual\PoliticalExposureEnum::from($value) : parent::assignMember($name, $value),
            'ssn_last_4' => is_string($value) ? $this->ssn_last_4 = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
