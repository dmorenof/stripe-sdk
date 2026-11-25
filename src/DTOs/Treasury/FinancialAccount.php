<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * FinancialAccount
 *
 * Stripe Treasury for Platforms provides users with a container for money called a FinancialAccount that is separate from their Payments balance.
 * FinancialAccounts serve as the source and destination of Treasury for Platform’s money movement APIs.
 */
final class FinancialAccount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'balance',
        'country',
        'created',
        'financial_addresses',
        'id',
        'livemode',
        'object_',
        'status',
        'status_details',
        'supported_currencies',
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
        'id' => [
            'maxLength' => 5000,
        ],
        'nickname' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The array of paths to active Features in the Features hash.
     */
    public \StripeSDK\Collections\Treasury\FinancialAccount\ActiveFeaturesCollection $active_features;
    public \StripeSDK\DTOs\Treasury\FinancialAccountsResourceBalance $balance;
    /**
     * Two-letter country code ([ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)).
     */
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    public \StripeSDK\DTOs\Treasury\FinancialAccountFeatures $features;
    /**
     * The set of credentials that resolve to a FinancialAccount.
     */
    public \StripeSDK\Collections\Treasury\FinancialAccount\FinancialAddressesCollection $financial_addresses;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public bool $is_default;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Treasury\FinancialAccount\MetadataMap $metadata;
    /**
     * The nickname for the FinancialAccount.
     */
    public ?string $nickname {
        set {
            $this->assigning('nickname', $value);
            $this->nickname = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Treasury\FinancialAccount\ObjectEnum $object_;
    /**
     * The array of paths to pending Features in the Features hash.
     */
    public \StripeSDK\Collections\Treasury\FinancialAccount\PendingFeaturesCollection $pending_features;
    /**
     * The set of functionalities that the platform can restrict on the FinancialAccount.
     */
    public ?\StripeSDK\DTOs\Treasury\FinancialAccountsResourcePlatformRestrictions $platform_restrictions;
    /**
     * The array of paths to restricted Features in the Features hash.
     */
    public \StripeSDK\Collections\Treasury\FinancialAccount\RestrictedFeaturesCollection $restricted_features;
    /**
     * Status of this FinancialAccount.
     */
    public \StripeSDK\Enums\Treasury\FinancialAccount\StatusEnum $status;
    public \StripeSDK\DTOs\Treasury\FinancialAccountsResourceStatusDetails $status_details;
    /**
     * The currencies the FinancialAccount can hold a balance in. Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase.
     */
    public \StripeSDK\Collections\StringCollection $supported_currencies;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'balance' => $value instanceof \stdClass ? $this->balance = new \StripeSDK\DTOs\Treasury\FinancialAccountsResourceBalance($value) : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'features' => $value instanceof \stdClass ? $this->features = new \StripeSDK\DTOs\Treasury\FinancialAccountFeatures($value) : parent::assignMember($name, $value),
            'financial_addresses' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->financial_addresses = new \StripeSDK\Collections\Treasury\FinancialAccount\FinancialAddressesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Treasury\FinancialAccountsResourceFinancialAddress::class)) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'is_default' => is_bool($value) ? $this->is_default = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'nickname' => $value === null || is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Treasury\FinancialAccount\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'platform_restrictions' => $value === null || $value instanceof \stdClass ? $this->platform_restrictions = $value === null ? null : new \StripeSDK\DTOs\Treasury\FinancialAccountsResourcePlatformRestrictions($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Treasury\FinancialAccount\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_details' => $value instanceof \stdClass ? $this->status_details = new \StripeSDK\DTOs\Treasury\FinancialAccountsResourceStatusDetails($value) : parent::assignMember($name, $value),
            'supported_currencies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->supported_currencies = new \StripeSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
