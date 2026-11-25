<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardShippingCustoms
 */
final class CardShippingCustoms extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'eori_number' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A registration number used for customs in Europe. See [https://www.gov.uk/eori](https://www.gov.uk/eori) for the UK and [https://ec.europa.eu/taxation_customs/business/customs-procedures-import-and-export/customs-procedures/economic-operators-registration-and-identification-number-eori_en](https://ec.europa.eu/taxation_customs/business/customs-procedures-import-and-export/customs-procedures/economic-operators-registration-and-identification-number-eori_en) for the EU.
     */
    public ?string $eori_number {
        set {
            $this->assigning('eori_number', $value);
            $this->eori_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'eori_number' => $value === null || is_string($value) ? $this->eori_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
