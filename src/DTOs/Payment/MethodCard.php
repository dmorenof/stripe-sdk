<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_card
 */
final class MethodCard extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'brand',
        'exp_month',
        'exp_year',
        'funding',
        'last4',
    ];

    protected const array VALIDATION = [
        'brand' => [
            'maxLength' => 5000,
        ],
        'country' => [
            'maxLength' => 5000,
        ],
        'display_brand' => [
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
    ];

    /**
     * Card brand. Can be `amex`, `cartes_bancaires`, `diners`, `discover`, `eftpos_au`, `jcb`, `link`, `mastercard`, `unionpay`, `visa` or `unknown`.
     */
    public string $brand {
        set {
            $this->assigning('brand', $value);
            $this->brand = $value;
        }
    }
    /**
     * Checks on Card address and CVC if provided.
     */
    public ?\StripeSDK\DTOs\Payment\MethodCardChecks $checks;
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
     * The brand to use when displaying the card, this accounts for customer's brand choice on dual-branded cards. Can be `american_express`, `cartes_bancaires`, `diners_club`, `discover`, `eftpos_australia`, `interac`, `jcb`, `mastercard`, `union_pay`, `visa`, or `other` and may contain more values in the future.
     */
    public ?string $display_brand {
        set {
            $this->assigning('display_brand', $value);
            $this->display_brand = $value;
        }
    }
    /**
     * Two-digit number representing the card's expiration month.
     */
    public int $exp_month;
    /**
     * Four-digit number representing the card's expiration year.
     */
    public int $exp_year;
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
    public string $funding {
        set {
            $this->assigning('funding', $value);
            $this->funding = $value;
        }
    }
    /**
     * Details of the original PaymentMethod that created this object.
     */
    public ?\StripeSDK\DTOs\Payment\MethodCardGeneratedCard $generated_from;
    /**
     * The last four digits of the card.
     */
    public string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }
    /**
     * Contains information about card networks that can be used to process the payment.
     */
    public ?\StripeSDK\DTOs\Networks $networks;
    /**
     * Status of a card based on the card issuer.
     */
    public ?\StripeSDK\Enums\Payment\MethodCard\RegulatedStatusEnum $regulated_status;
    /**
     * Contains details on how this Card may be used for 3D Secure authentication.
     */
    public ?\StripeSDK\DTOs\ThreeDSecureUsage $three_d_secure_usage;
    /**
     * If this Card is part of a card wallet, this contains the details of the card wallet.
     */
    public ?\StripeSDK\DTOs\Payment\MethodCardWallet $wallet;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brand' => is_string($value) ? $this->brand = $value : parent::assignMember($name, $value),
            'checks' => $value === null || $value instanceof \stdClass ? $this->checks = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodCardChecks($value) : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'display_brand' => $value === null || is_string($value) ? $this->display_brand = $value : parent::assignMember($name, $value),
            'exp_month' => is_int($value) ? $this->exp_month = $value : parent::assignMember($name, $value),
            'exp_year' => is_int($value) ? $this->exp_year = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'funding' => is_string($value) ? $this->funding = $value : parent::assignMember($name, $value),
            'generated_from' => $value === null || $value instanceof \stdClass ? $this->generated_from = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodCardGeneratedCard($value) : parent::assignMember($name, $value),
            'last4' => is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'networks' => $value === null || $value instanceof \stdClass ? $this->networks = $value === null ? null : new \StripeSDK\DTOs\Networks($value) : parent::assignMember($name, $value),
            'regulated_status' => $value === null || is_string($value) ? $this->regulated_status = $value === null ? null : \StripeSDK\Enums\Payment\MethodCard\RegulatedStatusEnum::from($value) : parent::assignMember($name, $value),
            'three_d_secure_usage' => $value === null || $value instanceof \stdClass ? $this->three_d_secure_usage = $value === null ? null : new \StripeSDK\DTOs\ThreeDSecureUsage($value) : parent::assignMember($name, $value),
            'wallet' => $value === null || $value instanceof \stdClass ? $this->wallet = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodCardWallet($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
