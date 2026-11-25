<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Terminal;

/**
 * Configuration
 *
 * A Configurations object represents how features should be configured for terminal readers.
 * For information about how to use it, see the [Terminal configurations documentation](https://docs.stripe.com/terminal/fleet/configurations-overview).
 */
final class Configuration extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'livemode',
        'object_',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig $bbpos_wisepad3;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig $bbpos_wisepos_e;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCellularConfig $cellular;
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
     * Whether this Configuration is the default for your account
     */
    public ?bool $is_account_default;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String indicating the name of the Configuration object, set by the user
     */
    public ?string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Terminal\Configuration\ObjectEnum $object_;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceOfflineConfig $offline;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceRebootWindow $reboot_window;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig $stripe_s700;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig $stripe_s710;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceTipping $tipping;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig $verifone_m425;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig $verifone_p400;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig $verifone_p630;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig $verifone_ux700;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig $verifone_v660p;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceWifiConfig $wifi;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bbpos_wisepad3' => $value instanceof \stdClass ? $this->bbpos_wisepad3 = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig($value) : parent::assignMember($name, $value),
            'bbpos_wisepos_e' => $value instanceof \stdClass ? $this->bbpos_wisepos_e = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig($value) : parent::assignMember($name, $value),
            'cellular' => $value instanceof \stdClass ? $this->cellular = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceCellularConfig($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'is_account_default' => $value === null || is_bool($value) ? $this->is_account_default = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Terminal\Configuration\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'offline' => $value instanceof \stdClass ? $this->offline = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceOfflineConfig($value) : parent::assignMember($name, $value),
            'reboot_window' => $value instanceof \stdClass ? $this->reboot_window = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceRebootWindow($value) : parent::assignMember($name, $value),
            'stripe_s700' => $value instanceof \stdClass ? $this->stripe_s700 = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig($value) : parent::assignMember($name, $value),
            'stripe_s710' => $value instanceof \stdClass ? $this->stripe_s710 = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig($value) : parent::assignMember($name, $value),
            'tipping' => $value instanceof \stdClass ? $this->tipping = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceTipping($value) : parent::assignMember($name, $value),
            'verifone_m425' => $value instanceof \stdClass ? $this->verifone_m425 = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig($value) : parent::assignMember($name, $value),
            'verifone_p400' => $value instanceof \stdClass ? $this->verifone_p400 = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig($value) : parent::assignMember($name, $value),
            'verifone_p630' => $value instanceof \stdClass ? $this->verifone_p630 = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig($value) : parent::assignMember($name, $value),
            'verifone_ux700' => $value instanceof \stdClass ? $this->verifone_ux700 = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig($value) : parent::assignMember($name, $value),
            'verifone_v660p' => $value instanceof \stdClass ? $this->verifone_v660p = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceDeviceTypeSpecificConfig($value) : parent::assignMember($name, $value),
            'wifi' => $value instanceof \stdClass ? $this->wifi = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceWifiConfig($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
