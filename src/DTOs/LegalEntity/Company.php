<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\LegalEntity;

/**
 * LegalEntityCompany
 */
final class Company extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'export_license_id' => [
            'maxLength' => 5000,
        ],
        'export_purpose_code' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'name_kana' => [
            'maxLength' => 5000,
        ],
        'name_kanji' => [
            'maxLength' => 5000,
        ],
        'phone' => [
            'maxLength' => 5000,
        ],
        'tax_id_registrar' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Address $address;
    /**
     * The Kana variation of the company's primary address (Japan only).
     */
    public ?\StripeSDK\DTOs\LegalEntity\JapanAddress $address_kana;
    /**
     * The Kanji variation of the company's primary address (Japan only).
     */
    public ?\StripeSDK\DTOs\LegalEntity\JapanAddress $address_kanji;
    public \StripeSDK\DTOs\Address $administrative_address;
    /**
     * Whether the company's directors have been provided. This Boolean will be `true` if you've manually indicated that all directors are provided via [the `directors_provided` parameter](https://docs.stripe.com/api/accounts/update#update_account-company-directors_provided).
     */
    public bool $directors_provided;
    /**
     * This hash is used to attest that the director information provided to Stripe is both current and correct.
     */
    public ?\StripeSDK\DTOs\LegalEntity\DirectorshipDeclaration $directorship_declaration;
    /**
     * Whether the company's executives have been provided. This Boolean will be `true` if you've manually indicated that all executives are provided via [the `executives_provided` parameter](https://docs.stripe.com/api/accounts/update#update_account-company-executives_provided), or if Stripe determined that sufficient executives were provided.
     */
    public bool $executives_provided;
    /**
     * The export license ID number of the company, also referred as Import Export Code (India only).
     */
    public string $export_license_id {
        set {
            $this->assigning('export_license_id', $value);
            $this->export_license_id = $value;
        }
    }
    /**
     * The purpose code to use for export transactions (India only).
     */
    public string $export_purpose_code {
        set {
            $this->assigning('export_purpose_code', $value);
            $this->export_purpose_code = $value;
        }
    }
    /**
     * The company's legal name. Also available for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `stripe`.
     */
    public ?string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The Kana variation of the company's legal name (Japan only). Also available for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `stripe`.
     */
    public ?string $name_kana {
        set {
            $this->assigning('name_kana', $value);
            $this->name_kana = $value;
        }
    }
    /**
     * The Kanji variation of the company's legal name (Japan only). Also available for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `stripe`.
     */
    public ?string $name_kanji {
        set {
            $this->assigning('name_kanji', $value);
            $this->name_kanji = $value;
        }
    }
    /**
     * Whether the company's owners have been provided. This Boolean will be `true` if you've manually indicated that all owners are provided via [the `owners_provided` parameter](https://docs.stripe.com/api/accounts/update#update_account-company-owners_provided), or if Stripe determined that sufficient owners were provided. Stripe determines ownership requirements using both the number of owners provided and their total percent ownership (calculated by adding the `percent_ownership` of each owner together).
     */
    public bool $owners_provided;
    /**
     * This hash is used to attest that the beneficial owner information provided to Stripe is both current and correct.
     */
    public ?\StripeSDK\DTOs\LegalEntity\UboDeclaration $ownership_declaration;
    /**
     * This value is used to determine if a business is exempt from providing ultimate beneficial owners. See [this support article](https://support.stripe.com/questions/exemption-from-providing-ownership-details) and [changelog](https://docs.stripe.com/changelog/acacia/2025-01-27/ownership-exemption-reason-accounts-api) for more details.
     */
    public \StripeSDK\Enums\LegalEntity\Company\ExemptionReasonEnum $ownership_exemption_reason;
    /**
     * The company's phone number (used for verification).
     */
    public ?string $phone {
        set {
            $this->assigning('phone', $value);
            $this->phone = $value;
        }
    }
    public \StripeSDK\DTOs\Address $principal_place_of_business;
    public \StripeSDK\DTOs\LegalEntity\RegistrationDate $registration_date;
    /**
     * This hash is used to attest that the representative is authorized to act as the representative of their legal entity.
     */
    public ?\StripeSDK\DTOs\LegalEntity\RepresentativeDeclaration $representative_declaration;
    /**
     * The category identifying the legal structure of the company or legal entity. Also available for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `stripe`. See [Business structure](https://docs.stripe.com/connect/identity-verification#business-structure) for more details.
     */
    public \StripeSDK\Enums\LegalEntity\Company\StructureEnum $structure;
    /**
     * Whether the company's business ID number was provided.
     */
    public bool $tax_id_provided;
    /**
     * The jurisdiction in which the `tax_id` is registered (Germany-based companies only).
     */
    public string $tax_id_registrar {
        set {
            $this->assigning('tax_id_registrar', $value);
            $this->tax_id_registrar = $value;
        }
    }
    /**
     * Whether the company's business VAT number was provided.
     */
    public bool $vat_id_provided;
    /**
     * Information on the verification state of the company.
     */
    public ?\StripeSDK\DTOs\LegalEntity\CompanyVerification $verification;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value instanceof \stdClass ? $this->address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'address_kana' => $value === null || $value instanceof \stdClass ? $this->address_kana = $value === null ? null : new \StripeSDK\DTOs\LegalEntity\JapanAddress($value) : parent::assignMember($name, $value),
            'address_kanji' => $value === null || $value instanceof \stdClass ? $this->address_kanji = $value === null ? null : new \StripeSDK\DTOs\LegalEntity\JapanAddress($value) : parent::assignMember($name, $value),
            'administrative_address' => $value instanceof \stdClass ? $this->administrative_address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'directors_provided' => is_bool($value) ? $this->directors_provided = $value : parent::assignMember($name, $value),
            'directorship_declaration' => $value === null || $value instanceof \stdClass ? $this->directorship_declaration = $value === null ? null : new \StripeSDK\DTOs\LegalEntity\DirectorshipDeclaration($value) : parent::assignMember($name, $value),
            'executives_provided' => is_bool($value) ? $this->executives_provided = $value : parent::assignMember($name, $value),
            'export_license_id' => is_string($value) ? $this->export_license_id = $value : parent::assignMember($name, $value),
            'export_purpose_code' => is_string($value) ? $this->export_purpose_code = $value : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'name_kana' => $value === null || is_string($value) ? $this->name_kana = $value : parent::assignMember($name, $value),
            'name_kanji' => $value === null || is_string($value) ? $this->name_kanji = $value : parent::assignMember($name, $value),
            'owners_provided' => is_bool($value) ? $this->owners_provided = $value : parent::assignMember($name, $value),
            'ownership_declaration' => $value === null || $value instanceof \stdClass ? $this->ownership_declaration = $value === null ? null : new \StripeSDK\DTOs\LegalEntity\UboDeclaration($value) : parent::assignMember($name, $value),
            'ownership_exemption_reason' => is_string($value) ? $this->ownership_exemption_reason = \StripeSDK\Enums\LegalEntity\Company\ExemptionReasonEnum::from($value) : parent::assignMember($name, $value),
            'phone' => $value === null || is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'principal_place_of_business' => $value instanceof \stdClass ? $this->principal_place_of_business = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'registration_date' => $value instanceof \stdClass ? $this->registration_date = new \StripeSDK\DTOs\LegalEntity\RegistrationDate($value) : parent::assignMember($name, $value),
            'representative_declaration' => $value === null || $value instanceof \stdClass ? $this->representative_declaration = $value === null ? null : new \StripeSDK\DTOs\LegalEntity\RepresentativeDeclaration($value) : parent::assignMember($name, $value),
            'structure' => is_string($value) ? $this->structure = \StripeSDK\Enums\LegalEntity\Company\StructureEnum::from($value) : parent::assignMember($name, $value),
            'tax_id_provided' => is_bool($value) ? $this->tax_id_provided = $value : parent::assignMember($name, $value),
            'tax_id_registrar' => is_string($value) ? $this->tax_id_registrar = $value : parent::assignMember($name, $value),
            'vat_id_provided' => is_bool($value) ? $this->vat_id_provided = $value : parent::assignMember($name, $value),
            'verification' => $value === null || $value instanceof \stdClass ? $this->verification = $value === null ? null : new \StripeSDK\DTOs\LegalEntity\CompanyVerification($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
