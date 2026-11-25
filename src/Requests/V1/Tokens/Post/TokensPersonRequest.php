<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tokens\Post;

/**
 * person_token_specs
 *
 * Information for the person this token represents.
 */
final class TokensPersonRequest extends \Dmorenof\SdkRuntime\DTO
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
    ];

    public \StripeSDK\Requests\V1\Tokens\Post\Person\TosAcceptancesRequest $additional_tos_acceptances;
    public \StripeSDK\Requests\V1\Tokens\Post\Person\PersonAddressRequest $address;
    public \StripeSDK\Requests\V1\Tokens\Post\Person\AddressKanaRequest $address_kana;
    public \StripeSDK\Requests\V1\Tokens\Post\Person\AddressKanjiRequest $address_kanji;
    public \StripeSDK\Requests\V1\Tokens\Post\Person\PersonDobRequest $dob;
    public \StripeSDK\Requests\V1\Tokens\Post\Person\PersonDocumentsRequest $documents;
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
    public \StripeSDK\Requests\V1\Tokens\Post\Person\NameAliasesRequest $full_name_aliases;
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
    public \StripeSDK\Requests\V1\Tokens\Post\Person\PersonMetadataRequest $metadata;
    public string $nationality {
        set {
            $this->assigning('nationality', $value);
            $this->nationality = $value;
        }
    }
    public string $phone;
    public \StripeSDK\Enums\V1\Tokens\Post\Person\PoliticalExposureEnum $political_exposure;
    public \StripeSDK\Requests\V1\Tokens\Post\Person\RegisteredAddressRequest $registered_address;
    public \StripeSDK\Requests\V1\Tokens\Post\Person\PersonRelationshipRequest $relationship;
    public string $ssn_last_4;
    public \StripeSDK\Requests\V1\Tokens\Post\Person\CfpbDataRequest $us_cfpb_data;
    public \StripeSDK\Requests\V1\Tokens\Post\Person\PersonVerificationRequest $verification;

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
            'nationality' => is_string($value) ? $this->nationality = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'political_exposure' => is_string($value) ? $this->political_exposure = \StripeSDK\Enums\V1\Tokens\Post\Person\PoliticalExposureEnum::from($value) : parent::assignMember($name, $value),
            'ssn_last_4' => is_string($value) ? $this->ssn_last_4 = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
