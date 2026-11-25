<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Account
 *
 * For new integrations, we recommend using the [Accounts v2 API](/api/v2/core/accounts), in place of /v1/accounts and /v1/customers to represent a user.
 *
 * This is an object representing a Stripe account. You can retrieve it to see
 * properties on the account like its current requirements or if the account is
 * enabled to make live charges or receive payouts.
 *
 * For accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection)
 * is `application`, which includes Custom accounts, the properties below are always
 * returned.
 *
 * For accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection)
 * is `stripe`, which includes Standard and Express accounts, some properties are only returned
 * until you create an [Account Link](/api/account_links) or [Account Session](/api/account_sessions)
 * to start Connect Onboarding. Learn about the [differences between accounts](/connect/accounts).
 */
final class Account extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
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
        'country' => [
            'maxLength' => 5000,
        ],
        'default_currency' => [
            'maxLength' => 5000,
        ],
        'email' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Business information about the account.
     */
    public ?\StripeSDK\DTOs\Account\BusinessProfile $business_profile;
    /**
     * The business type.
     */
    public ?\StripeSDK\Enums\Account\BusinessTypeEnum $business_type;
    public \StripeSDK\DTOs\Account\Capabilities $capabilities;
    /**
     * Whether the account can process charges.
     */
    public bool $charges_enabled;
    public \StripeSDK\DTOs\LegalEntity\Company $company;
    public \StripeSDK\DTOs\Account\UnificationAccountController $controller;
    /**
     * The account's country.
     */
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * Time at which the account was connected. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Three-letter ISO currency code representing the default currency for the account. This must be a currency that [Stripe supports in the account's country](https://stripe.com/docs/payouts).
     */
    public string $default_currency {
        set {
            $this->assigning('default_currency', $value);
            $this->default_currency = $value;
        }
    }
    /**
     * Whether account details have been submitted. Accounts with Stripe Dashboard access, which includes Standard accounts, cannot receive payouts before this is true. Accounts where this is false should be directed to [an onboarding flow](/connect/onboarding) to finish submitting account details.
     */
    public bool $details_submitted;
    /**
     * An email address associated with the account. It's not used for authentication and Stripe doesn't market to this field without explicit approval from the platform.
     */
    public ?string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * External accounts (bank accounts and debit cards) currently attached to this account. External accounts are only returned for requests where `controller[is_controller]` is true.
     */
    public \StripeSDK\DTOs\Account\ExternalAccountsDTO $external_accounts;
    public \StripeSDK\DTOs\Account\FutureRequirements $future_requirements;
    /**
     * The groups associated with the account.
     */
    public ?\StripeSDK\DTOs\Account\GroupMembership $groups;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public \StripeSDK\DTOs\Person $individual;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Account\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Account\ObjectEnum $object_;
    /**
     * Whether the funds in this account can be paid out.
     */
    public bool $payouts_enabled;
    public \StripeSDK\DTOs\Account\Requirements $requirements;
    /**
     * Options for customizing how the account functions within Stripe.
     */
    public ?\StripeSDK\DTOs\Account\Settings $settings;
    public \StripeSDK\DTOs\Account\TosAcceptance $tos_acceptance;
    /**
     * The Stripe account type. Can be `standard`, `express`, `custom`, or `none`.
     */
    public \StripeSDK\Enums\Account\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'business_profile' => $value === null || $value instanceof \stdClass ? $this->business_profile = $value === null ? null : new \StripeSDK\DTOs\Account\BusinessProfile($value) : parent::assignMember($name, $value),
            'business_type' => $value === null || is_string($value) ? $this->business_type = $value === null ? null : \StripeSDK\Enums\Account\BusinessTypeEnum::from($value) : parent::assignMember($name, $value),
            'capabilities' => $value instanceof \stdClass ? $this->capabilities = new \StripeSDK\DTOs\Account\Capabilities($value) : parent::assignMember($name, $value),
            'charges_enabled' => is_bool($value) ? $this->charges_enabled = $value : parent::assignMember($name, $value),
            'company' => $value instanceof \stdClass ? $this->company = new \StripeSDK\DTOs\LegalEntity\Company($value) : parent::assignMember($name, $value),
            'controller' => $value instanceof \stdClass ? $this->controller = new \StripeSDK\DTOs\Account\UnificationAccountController($value) : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'default_currency' => is_string($value) ? $this->default_currency = $value : parent::assignMember($name, $value),
            'details_submitted' => is_bool($value) ? $this->details_submitted = $value : parent::assignMember($name, $value),
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'future_requirements' => $value instanceof \stdClass ? $this->future_requirements = new \StripeSDK\DTOs\Account\FutureRequirements($value) : parent::assignMember($name, $value),
            'groups' => $value === null || $value instanceof \stdClass ? $this->groups = $value === null ? null : new \StripeSDK\DTOs\Account\GroupMembership($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'individual' => $value instanceof \stdClass ? $this->individual = new \StripeSDK\DTOs\Person($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Account\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'payouts_enabled' => is_bool($value) ? $this->payouts_enabled = $value : parent::assignMember($name, $value),
            'requirements' => $value instanceof \stdClass ? $this->requirements = new \StripeSDK\DTOs\Account\Requirements($value) : parent::assignMember($name, $value),
            'settings' => $value === null || $value instanceof \stdClass ? $this->settings = $value === null ? null : new \StripeSDK\DTOs\Account\Settings($value) : parent::assignMember($name, $value),
            'tos_acceptance' => $value instanceof \stdClass ? $this->tos_acceptance = new \StripeSDK\DTOs\Account\TosAcceptance($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Account\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
