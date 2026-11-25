<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 100,
        ],
    ];

    /**
     * An object containing device type specific settings for BBPOS WisePad 3 readers.
     */
    public \StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post\BbposWisepad3Request $bbpos_wisepad3;
    /**
     * An object containing device type specific settings for BBPOS WisePOS E readers.
     */
    public \StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post\WiseposERequest $bbpos_wisepos_e;
    /**
     * Configuration for cellular connectivity.
     */
    public \StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post\ByConfigurationCellularRequest $cellular;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Name of the configuration
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Configurations for collecting transactions offline.
     */
    public \StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post\ByConfigurationOfflineRequest $offline;
    /**
     * Reboot time settings for readers. that support customized reboot time configuration.
     */
    public \StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post\RebootWindowRequest $reboot_window;
    /**
     * An object containing device type specific settings for Stripe S700 readers.
     */
    public \StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post\StripeS700Request $stripe_s700;
    /**
     * An object containing device type specific settings for Stripe S710 readers.
     */
    public \StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post\StripeS710Request $stripe_s710;
    /**
     * Tipping configurations for readers that support on-reader tips.
     */
    public \StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post\ByConfigurationTippingRequest $tipping;
    /**
     * An object containing device type specific settings for Verifone M425 readers.
     */
    public \StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post\VerifoneM425Request $verifone_m425;
    /**
     * An object containing device type specific settings for Verifone P400 readers.
     */
    public \StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post\VerifoneP400Request $verifone_p400;
    /**
     * An object containing device type specific settings for Verifone P630 readers.
     */
    public \StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post\VerifoneP630Request $verifone_p630;
    /**
     * An object containing device type specific settings for Verifone UX700 readers.
     */
    public \StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post\VerifoneUx700Request $verifone_ux700;
    /**
     * An object containing device type specific settings for Verifone V660p readers.
     */
    public \StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post\VerifoneV660pRequest $verifone_v660p;
    /**
     * Configurations for connecting to a WiFi network.
     */
    public \StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post\ByConfigurationWifiRequest $wifi;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
