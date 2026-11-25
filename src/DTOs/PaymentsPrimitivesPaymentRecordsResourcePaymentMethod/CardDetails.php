<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod;

/**
 * Card payment method detail
 *
 * Details of the card used for this payment attempt.
 */
final class CardDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'authorization_code' => [
            'maxLength' => 5000,
        ],
        'country' => [
            'maxLength' => 5000,
        ],
        'fingerprint' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'network_advice_code' => [
            'maxLength' => 5000,
        ],
        'network_decline_code' => [
            'maxLength' => 5000,
        ],
        'network_transaction_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The authorization code of the payment.
     */
    public ?string $authorization_code {
        set {
            $this->assigning('authorization_code', $value);
            $this->authorization_code = $value;
        }
    }
    /**
     * Card brand. Can be `amex`, `cartes_bancaires`, `diners`, `discover`, `eftpos_au`, `jcb`, `link`, `mastercard`, `unionpay`, `visa` or `unknown`.
     */
    public ?\StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetails\BrandEnum $brand;
    /**
     * When using manual capture, a future timestamp at which the charge will be automatically refunded if uncaptured.
     * Format: unix-time
     */
    public int $capture_before;
    /**
     * Check results by Card networks on Card address and CVC at time of payment.
     */
    public ?\StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceChecks $checks;
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
    public ?\StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetails\FundingEnum $funding;
    /**
     * Installment details for this payment.
     */
    public ?\StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceInstallments $installments;
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
    public ?\StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetails\NetworkEnum $network;
    /**
     * Advice code from the card network for the failed payment.
     */
    public ?string $network_advice_code {
        set {
            $this->assigning('network_advice_code', $value);
            $this->network_advice_code = $value;
        }
    }
    /**
     * Decline code from the card network for the failed payment.
     */
    public ?string $network_decline_code {
        set {
            $this->assigning('network_decline_code', $value);
            $this->network_decline_code = $value;
        }
    }
    /**
     * If this card has network token credentials, this contains the details of the network token credentials.
     */
    public ?\StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceNetworkToken $network_token;
    /**
     * This is used by the financial networks to identify a transaction. Visa calls this the Transaction ID, Mastercard calls this the Trace ID, and American Express calls this the Acquirer Reference Data. This value will be present if it is returned by the financial network in the authorization response, and null otherwise.
     */
    public ?string $network_transaction_id {
        set {
            $this->assigning('network_transaction_id', $value);
            $this->network_transaction_id = $value;
        }
    }
    /**
     * Populated if this transaction used 3D Secure authentication.
     */
    public ?\StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceThreeDSecure $three_d_secure;
    /**
     * If this Card is part of a card wallet, this contains the details of the card wallet.
     */
    public ?\StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceWallet $wallet;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authorization_code' => $value === null || is_string($value) ? $this->authorization_code = $value : parent::assignMember($name, $value),
            'brand' => $value === null || is_string($value) ? $this->brand = $value === null ? null : \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetails\BrandEnum::from($value) : parent::assignMember($name, $value),
            'capture_before' => is_int($value) ? $this->capture_before = $value : parent::assignMember($name, $value),
            'checks' => $value === null || $value instanceof \stdClass ? $this->checks = $value === null ? null : new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceChecks($value) : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'exp_month' => $value === null || is_int($value) ? $this->exp_month = $value : parent::assignMember($name, $value),
            'exp_year' => $value === null || is_int($value) ? $this->exp_year = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'funding' => $value === null || is_string($value) ? $this->funding = $value === null ? null : \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetails\FundingEnum::from($value) : parent::assignMember($name, $value),
            'installments' => $value === null || $value instanceof \stdClass ? $this->installments = $value === null ? null : new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceInstallments($value) : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'network' => $value === null || is_string($value) ? $this->network = $value === null ? null : \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetails\NetworkEnum::from($value) : parent::assignMember($name, $value),
            'network_advice_code' => $value === null || is_string($value) ? $this->network_advice_code = $value : parent::assignMember($name, $value),
            'network_decline_code' => $value === null || is_string($value) ? $this->network_decline_code = $value : parent::assignMember($name, $value),
            'network_token' => $value === null || $value instanceof \stdClass ? $this->network_token = $value === null ? null : new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceNetworkToken($value) : parent::assignMember($name, $value),
            'network_transaction_id' => $value === null || is_string($value) ? $this->network_transaction_id = $value : parent::assignMember($name, $value),
            'three_d_secure' => $value === null || $value instanceof \stdClass ? $this->three_d_secure = $value === null ? null : new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceThreeDSecure($value) : parent::assignMember($name, $value),
            'wallet' => $value === null || $value instanceof \stdClass ? $this->wallet = $value === null ? null : new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceWallet($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
