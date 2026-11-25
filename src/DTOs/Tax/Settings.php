<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Tax;

/**
 * Tax Setting
 *
 * You can use Tax `Settings` to manage configurations used by Stripe Tax calculations.
 *
 * Related guide: [Using the Settings API](https://docs.stripe.com/tax/settings-api)
 */
final class Settings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'defaults',
        'livemode',
        'object_',
        'status',
        'status_details',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    public \StripeSDK\DTOs\TaxProduct\ResourceTaxSettingsDefaults $defaults;
    /**
     * The place where your business is located.
     */
    public ?\StripeSDK\DTOs\TaxProduct\ResourceTaxSettingsHeadOffice $head_office;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Tax\Settings\ObjectEnum $object_;
    /**
     * Whether these settings have the information Stripe Tax needs to calculate tax. It doesn't reflect whether your integration is ready to collect tax.
     */
    public \StripeSDK\Enums\Tax\Settings\StatusEnum $status;
    public \StripeSDK\DTOs\TaxProduct\ResourceTaxSettingsStatusDetails $status_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'defaults' => $value instanceof \stdClass ? $this->defaults = new \StripeSDK\DTOs\TaxProduct\ResourceTaxSettingsDefaults($value) : parent::assignMember($name, $value),
            'head_office' => $value === null || $value instanceof \stdClass ? $this->head_office = $value === null ? null : new \StripeSDK\DTOs\TaxProduct\ResourceTaxSettingsHeadOffice($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Tax\Settings\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Tax\Settings\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_details' => $value instanceof \stdClass ? $this->status_details = new \StripeSDK\DTOs\TaxProduct\ResourceTaxSettingsStatusDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
