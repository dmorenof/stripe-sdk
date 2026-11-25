<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Sources\BySource\Post\Mandate\Acceptance;

/**
 * mandate_offline_acceptance_params
 */
final class AcceptanceOfflineRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contact_email',
    ];

    public string $contact_email;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contact_email' => is_string($value) ? $this->contact_email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
