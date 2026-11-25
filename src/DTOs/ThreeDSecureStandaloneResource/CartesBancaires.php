<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ThreeDSecureStandaloneResource;

/**
 * CartesBancairesResource
 *
 * Contains details for Cartes Bancaires specific fields in the authentication outcomes.
 */
final class CartesBancaires extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'avalgo',
    ];

    protected const array VALIDATION = [
        'avalgo' => [
            'maxLength' => 5000,
        ],
        'cb_exemption' => [
            'maxLength' => 5000,
        ],
        'cb_score' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The cryptogram calculation algorithm used by the card Issuer's ACS to calculate the Authentication cryptogram. Also known as cavvAlgorithm. ARes/RReq messageExtension: `CB-AVALGO`
     */
    public string $avalgo {
        set {
            $this->assigning('avalgo', $value);
            $this->avalgo = $value;
        }
    }
    /**
     * The exemption indicator returned from Cartes Bancaires in the ARes. This is a 3 byte bitmap (lowest significant byte first and most significant bit first) that has been Base64 encoded. String (4 characters). ARes message extension: `CB-EXEMPTION`
     */
    public ?string $cb_exemption {
        set {
            $this->assigning('cb_exemption', $value);
            $this->cb_exemption = $value;
        }
    }
    /**
     * The risk score returned from Cartes Bancaires in the ARes. Numeric value 0-99. ARes/RReq message extension: `CB-SCORE`
     */
    public ?string $cb_score {
        set {
            $this->assigning('cb_score', $value);
            $this->cb_score = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'avalgo' => is_string($value) ? $this->avalgo = $value : parent::assignMember($name, $value),
            'cb_exemption' => $value === null || is_string($value) ? $this->cb_exemption = $value : parent::assignMember($name, $value),
            'cb_score' => $value === null || is_string($value) ? $this->cb_score = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
