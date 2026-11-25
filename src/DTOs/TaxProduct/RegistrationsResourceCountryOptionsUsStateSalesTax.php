<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductRegistrationsResourceCountryOptionsUsStateSalesTax
 */
final class RegistrationsResourceCountryOptionsUsStateSalesTax extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Elections for the state sales tax registration.
     */
    public \StripeSDK\Collections\TaxProduct\RegistrationsResourceCountryOptionsUsStateSalesTax\ElectionsCollection $elections;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'elections' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->elections = new \StripeSDK\Collections\TaxProduct\RegistrationsResourceCountryOptionsUsStateSalesTax\ElectionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsStateSalesTaxElection::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
