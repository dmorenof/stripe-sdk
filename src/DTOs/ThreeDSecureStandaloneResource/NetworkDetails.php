<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ThreeDSecureStandaloneResource;

/**
 * NetworkDetailsResource
 *
 * Contains details specific to the individual network.
 */
final class NetworkDetails extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\ThreeDSecureStandaloneResource\CartesBancaires $cartes_bancaires;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cartes_bancaires' => $value instanceof \stdClass ? $this->cartes_bancaires = new \StripeSDK\DTOs\ThreeDSecureStandaloneResource\CartesBancaires($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
