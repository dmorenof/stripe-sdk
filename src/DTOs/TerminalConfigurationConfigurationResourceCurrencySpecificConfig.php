<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * TerminalConfigurationConfigurationResourceCurrencySpecificConfig
 */
final class TerminalConfigurationConfigurationResourceCurrencySpecificConfig extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Fixed amounts displayed when collecting a tip
     */
    public ?\StripeSDK\Collections\IntegerCollection $fixed_amounts;
    /**
     * Percentages displayed when collecting a tip
     */
    public ?\StripeSDK\Collections\IntegerCollection $percentages;
    /**
     * Below this amount, fixed amounts will be displayed; above it, percentages will be displayed
     */
    public int $smart_tip_threshold;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fixed_amounts' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item))) ? $this->fixed_amounts = $value === null ? null : new \StripeSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'percentages' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item))) ? $this->percentages = $value === null ? null : new \StripeSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'smart_tip_threshold' => is_int($value) ? $this->smart_tip_threshold = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
