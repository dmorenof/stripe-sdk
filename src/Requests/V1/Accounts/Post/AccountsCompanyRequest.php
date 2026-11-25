<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post;

/**
 * company_specs
 *
 * Information about the company or business. This field is available for any `business_type`. Once you create an [Account Link](/api/account_links) or [Account Session](/api/account_sessions), this property can only be updated for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `application`, which includes Custom accounts.
 */
final class AccountsCompanyRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'export_license_id' => [
            'maxLength' => 5000,
        ],
        'export_purpose_code' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 200,
        ],
        'name_kana' => [
            'maxLength' => 200,
        ],
        'name_kanji' => [
            'maxLength' => 200,
        ],
        'phone' => [
            'maxLength' => 5000,
        ],
        'registration_number' => [
            'maxLength' => 5000,
        ],
        'tax_id' => [
            'maxLength' => 5000,
        ],
        'tax_id_registrar' => [
            'maxLength' => 5000,
        ],
        'vat_id' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\Accounts\Post\Company\CompanyAddressRequest $address;
    public \StripeSDK\Requests\V1\Accounts\Post\Company\AddressKanaRequest $address_kana;
    public \StripeSDK\Requests\V1\Accounts\Post\Company\AddressKanjiRequest $address_kanji;
    public \StripeSDK\Requests\V1\Accounts\Post\Company\AdministrativeAddressRequest $administrative_address;
    public bool $directors_provided;
    public \StripeSDK\Requests\V1\Accounts\Post\Company\DirectorshipDeclarationRequest $directorship_declaration;
    public bool $executives_provided;
    public string $export_license_id {
        set {
            $this->assigning('export_license_id', $value);
            $this->export_license_id = $value;
        }
    }
    public string $export_purpose_code {
        set {
            $this->assigning('export_purpose_code', $value);
            $this->export_purpose_code = $value;
        }
    }
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public string $name_kana {
        set {
            $this->assigning('name_kana', $value);
            $this->name_kana = $value;
        }
    }
    public string $name_kanji {
        set {
            $this->assigning('name_kanji', $value);
            $this->name_kanji = $value;
        }
    }
    public bool $owners_provided;
    public \StripeSDK\Requests\V1\Accounts\Post\Company\OwnershipDeclarationRequest $ownership_declaration;
    public \StripeSDK\Enums\V1\Accounts\Post\Company\ExemptionReasonEnum $ownership_exemption_reason;
    public string $phone {
        set {
            $this->assigning('phone', $value);
            $this->phone = $value;
        }
    }
    public \StripeSDK\Requests\V1\Accounts\Post\Company\PlaceBusinessRequest $principal_place_of_business;
    public \StripeSDK\Requests\V1\Accounts\Post\Company\RegistrationDateRequest $registration_date;
    public string $registration_number {
        set {
            $this->assigning('registration_number', $value);
            $this->registration_number = $value;
        }
    }
    public \StripeSDK\Requests\V1\Accounts\Post\Company\RepresentativeDeclarationRequest $representative_declaration;
    public \StripeSDK\Enums\V1\Accounts\Post\Company\CompanyStructureEnum $structure;
    public string $tax_id {
        set {
            $this->assigning('tax_id', $value);
            $this->tax_id = $value;
        }
    }
    public string $tax_id_registrar {
        set {
            $this->assigning('tax_id_registrar', $value);
            $this->tax_id_registrar = $value;
        }
    }
    public string $vat_id {
        set {
            $this->assigning('vat_id', $value);
            $this->vat_id = $value;
        }
    }
    public \StripeSDK\Requests\V1\Accounts\Post\Company\CompanyVerificationRequest $verification;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'directors_provided' => is_bool($value) ? $this->directors_provided = $value : parent::assignMember($name, $value),
            'executives_provided' => is_bool($value) ? $this->executives_provided = $value : parent::assignMember($name, $value),
            'export_license_id' => is_string($value) ? $this->export_license_id = $value : parent::assignMember($name, $value),
            'export_purpose_code' => is_string($value) ? $this->export_purpose_code = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'name_kana' => is_string($value) ? $this->name_kana = $value : parent::assignMember($name, $value),
            'name_kanji' => is_string($value) ? $this->name_kanji = $value : parent::assignMember($name, $value),
            'owners_provided' => is_bool($value) ? $this->owners_provided = $value : parent::assignMember($name, $value),
            'ownership_exemption_reason' => is_string($value) ? $this->ownership_exemption_reason = \StripeSDK\Enums\V1\Accounts\Post\Company\ExemptionReasonEnum::from($value) : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'registration_number' => is_string($value) ? $this->registration_number = $value : parent::assignMember($name, $value),
            'structure' => is_string($value) ? $this->structure = \StripeSDK\Enums\V1\Accounts\Post\Company\CompanyStructureEnum::from($value) : parent::assignMember($name, $value),
            'tax_id' => is_string($value) ? $this->tax_id = $value : parent::assignMember($name, $value),
            'tax_id_registrar' => is_string($value) ? $this->tax_id_registrar = $value : parent::assignMember($name, $value),
            'vat_id' => is_string($value) ? $this->vat_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
