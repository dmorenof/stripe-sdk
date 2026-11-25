<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_card
 */
final class MethodDetailsCard extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'exp_month',
        'exp_year',
    ];

    protected const array VALIDATION = [
        'authorization_code' => [
            'maxLength' => 5000,
        ],
        'brand' => [
            'maxLength' => 5000,
        ],
        'country' => [
            'maxLength' => 5000,
        ],
        'electronic_commerce_indicator' => [
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
        'network_transaction_id' => [
            'maxLength' => 5000,
        ],
        'transaction_link_id' => [
            'maxLength' => 22,
        ],
    ];

    /**
     * The authorized amount.
     */
    public ?int $amount_authorized;
    /**
     * Authorization code on the charge.
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
    public ?string $brand {
        set {
            $this->assigning('brand', $value);
            $this->brand = $value;
        }
    }
    /**
     * When using manual capture, a future timestamp at which the charge will be automatically refunded if uncaptured.
     * Format: unix-time
     */
    public int $capture_before;
    /**
     * Check results by Card networks on Card address and CVC at time of payment.
     */
    public ?\StripeSDK\DTOs\Payment\MethodDetailsCardChecks $checks;
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
     * The Electronic Commerce Indicator (ECI) returned by the card network in the authorization response. Indicates the level of authentication used. Only populated for Visa and Mastercard transactions. This is the network's final ECI and can differ from the request value. An authenticated ECI alone doesn't determine liability shift.
     */
    public ?string $electronic_commerce_indicator {
        set {
            $this->assigning('electronic_commerce_indicator', $value);
            $this->electronic_commerce_indicator = $value;
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
    public \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsCardDetailsApiResourceEnterpriseFeaturesExtendedAuthorizationExtendedAuthorization $extended_authorization;
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
    public \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsCardDetailsApiResourceEnterpriseFeaturesIncrementalAuthorizationIncrementalAuthorization $incremental_authorization;
    /**
     * Installment details for this payment.
     *
     * For more information, see the [installments integration guide](https://docs.stripe.com/payments/installments).
     */
    public ?\StripeSDK\DTOs\Payment\MethodDetailsCardInstallments $installments;
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
     * ID of the mandate used to make this payment or created by it.
     */
    public ?\StripeSDK\DTOs\Payment\MethodDetailsCard\MandateDTO $mandate;
    public \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsCardDetailsApiResourceMulticapture $multicapture;
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
     * If this card has network token credentials, this contains the details of the network token credentials.
     */
    public ?\StripeSDK\DTOs\Payment\MethodDetailsCardNetworkToken $network_token;
    /**
     * This is used by the financial networks to identify a transaction. Visa calls this the Transaction ID, Mastercard calls this the Trace ID, and American Express calls this the Acquirer Reference Data. This value will be present if it is returned by the financial network in the authorization response, and null otherwise.
     */
    public ?string $network_transaction_id {
        set {
            $this->assigning('network_transaction_id', $value);
            $this->network_transaction_id = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsCardDetailsApiResourceEnterpriseFeaturesOvercaptureOvercapture $overcapture;
    /**
     * Status of a card based on the card issuer.
     */
    public ?\StripeSDK\Enums\Payment\MethodDetailsCard\RegulatedStatusEnum $regulated_status;
    /**
     * Populated if this transaction used 3D Secure authentication.
     */
    public ?\StripeSDK\DTOs\ThreeDSecureDetailsCharge $three_d_secure;
    /**
     * Transaction Link ID (TLID) is a unique identifier for a transaction. This is used by some card networks, such as Mastercard, for transaction linking, in addition to Network Transaction IDs. This value will be present if it is returned by the financial network in the authorization response, and null otherwise.
     */
    public ?string $transaction_link_id {
        set {
            $this->assigning('transaction_link_id', $value);
            $this->transaction_link_id = $value;
        }
    }
    /**
     * If this Card is part of a card wallet, this contains the details of the card wallet.
     */
    public ?\StripeSDK\DTOs\Payment\MethodDetailsCardWallet $wallet;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_authorized' => $value === null || is_int($value) ? $this->amount_authorized = $value : parent::assignMember($name, $value),
            'authorization_code' => $value === null || is_string($value) ? $this->authorization_code = $value : parent::assignMember($name, $value),
            'brand' => $value === null || is_string($value) ? $this->brand = $value : parent::assignMember($name, $value),
            'capture_before' => is_int($value) ? $this->capture_before = $value : parent::assignMember($name, $value),
            'checks' => $value === null || $value instanceof \stdClass ? $this->checks = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodDetailsCardChecks($value) : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'electronic_commerce_indicator' => $value === null || is_string($value) ? $this->electronic_commerce_indicator = $value : parent::assignMember($name, $value),
            'exp_month' => is_int($value) ? $this->exp_month = $value : parent::assignMember($name, $value),
            'exp_year' => is_int($value) ? $this->exp_year = $value : parent::assignMember($name, $value),
            'extended_authorization' => $value instanceof \stdClass ? $this->extended_authorization = new \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsCardDetailsApiResourceEnterpriseFeaturesExtendedAuthorizationExtendedAuthorization($value) : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'funding' => $value === null || is_string($value) ? $this->funding = $value : parent::assignMember($name, $value),
            'incremental_authorization' => $value instanceof \stdClass ? $this->incremental_authorization = new \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsCardDetailsApiResourceEnterpriseFeaturesIncrementalAuthorizationIncrementalAuthorization($value) : parent::assignMember($name, $value),
            'installments' => $value === null || $value instanceof \stdClass ? $this->installments = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodDetailsCardInstallments($value) : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'multicapture' => $value instanceof \stdClass ? $this->multicapture = new \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsCardDetailsApiResourceMulticapture($value) : parent::assignMember($name, $value),
            'network' => $value === null || is_string($value) ? $this->network = $value : parent::assignMember($name, $value),
            'network_token' => $value === null || $value instanceof \stdClass ? $this->network_token = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodDetailsCardNetworkToken($value) : parent::assignMember($name, $value),
            'network_transaction_id' => $value === null || is_string($value) ? $this->network_transaction_id = $value : parent::assignMember($name, $value),
            'overcapture' => $value instanceof \stdClass ? $this->overcapture = new \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsCardDetailsApiResourceEnterpriseFeaturesOvercaptureOvercapture($value) : parent::assignMember($name, $value),
            'regulated_status' => $value === null || is_string($value) ? $this->regulated_status = $value === null ? null : \StripeSDK\Enums\Payment\MethodDetailsCard\RegulatedStatusEnum::from($value) : parent::assignMember($name, $value),
            'three_d_secure' => $value === null || $value instanceof \stdClass ? $this->three_d_secure = $value === null ? null : new \StripeSDK\DTOs\ThreeDSecureDetailsCharge($value) : parent::assignMember($name, $value),
            'transaction_link_id' => $value === null || is_string($value) ? $this->transaction_link_id = $value : parent::assignMember($name, $value),
            'wallet' => $value === null || $value instanceof \stdClass ? $this->wallet = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodDetailsCardWallet($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
