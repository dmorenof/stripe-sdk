<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountPaypaySiteSettings
 */
final class PaypaySiteSettings extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Account\PaypaySiteAccessibleSettings $accessible;
    public \StripeSDK\DTOs\Account\PaypaySiteInDevelopmentSettings $in_development;
    public \StripeSDK\DTOs\Account\PaypaySiteRestrictedSettings $restricted;
    /**
     * The status of your business's website.
     */
    public \StripeSDK\Enums\Account\PaypaySiteSettings\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'in_development' => $value instanceof \stdClass ? $this->in_development = new \StripeSDK\DTOs\Account\PaypaySiteInDevelopmentSettings($value) : parent::assignMember($name, $value),
            'restricted' => $value instanceof \stdClass ? $this->restricted = new \StripeSDK\DTOs\Account\PaypaySiteRestrictedSettings($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Account\PaypaySiteSettings\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
