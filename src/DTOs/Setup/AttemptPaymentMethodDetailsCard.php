<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * setup_attempt_payment_method_details_card
 */
final class AttemptPaymentMethodDetailsCard extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'brand' => [
            'maxLength' => 5000,
        ],
        'country' => [
            'maxLength' => 5000,
        ],
        'fingerprint' => [
            'maxLength' => 5000,
        ],
        'funding' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'network' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Card brand. Can be `amex`, `cartes_bancaires`, `diners`, `discover`, `eftpos_au`, `jcb`, `link`, `mastercard`, `unionpay`, `visa` or `unknown`.
     */
    public ?string $brand {
        set {
            $this->assigning('brand', $value);
            $this->brand = $value;
        }
    }
    /**
     * Check results by Card networks on Card address and CVC at the time of authorization
     */
    public ?\StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsCardChecks $checks;
    /**
     * Two-letter ISO code representing the country of the card. You could use this attribute to get a sense of the international breakdown of cards you've collected.
     */
    public ?string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * Two-digit number representing the card's expiration month.
     */
    public ?int $exp_month;
    /**
     * Four-digit number representing the card's expiration year.
     */
    public ?int $exp_year;
    /**
     * Uniquely identifies this particular card number. You can use this attribute to check whether two customers who’ve signed up with you are using the same card number, for example. For payment methods that tokenize card information (Apple Pay, Google Pay), the tokenized number might be provided instead of the underlying card number.
     *
     * *As of May 1, 2021, card fingerprint in India for Connect changed to allow two fingerprints for the same card---one for India and one for the rest of the world.*
     */
    public ?string $fingerprint {
        set {
            $this->assigning('fingerprint', $value);
            $this->fingerprint = $value;
        }
    }
    /**
     * Card funding type. Can be `credit`, `debit`, `prepaid`, or `unknown`.
     */
    public ?string $funding {
        set {
            $this->assigning('funding', $value);
            $this->funding = $value;
        }
    }
    /**
     * The last four digits of the card.
     */
    public ?string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }
    /**
     * Identifies which network this charge was processed on. Can be `amex`, `cartes_bancaires`, `diners`, `discover`, `eftpos_au`, `interac`, `jcb`, `link`, `mastercard`, `unionpay`, `visa`, or `unknown`.
     */
    public ?string $network {
        set {
            $this->assigning('network', $value);
            $this->network = $value;
        }
    }
    /**
     * Populated if this authorization used 3D Secure authentication.
     */
    public ?\StripeSDK\DTOs\ThreeDSecureDetails $three_d_secure;
    /**
     * If this Card is part of a card wallet, this contains the details of the card wallet.
     */
    public ?\StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsCardWallet $wallet;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brand' => $value === null || is_string($value) ? $this->brand = $value : parent::assignMember($name, $value),
            'checks' => $value === null || $value instanceof \stdClass ? $this->checks = $value === null ? null : new \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsCardChecks($value) : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'exp_month' => $value === null || is_int($value) ? $this->exp_month = $value : parent::assignMember($name, $value),
            'exp_year' => $value === null || is_int($value) ? $this->exp_year = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'funding' => $value === null || is_string($value) ? $this->funding = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'network' => $value === null || is_string($value) ? $this->network = $value : parent::assignMember($name, $value),
            'three_d_secure' => $value === null || $value instanceof \stdClass ? $this->three_d_secure = $value === null ? null : new \StripeSDK\DTOs\ThreeDSecureDetails($value) : parent::assignMember($name, $value),
            'wallet' => $value === null || $value instanceof \stdClass ? $this->wallet = $value === null ? null : new \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsCardWallet($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
