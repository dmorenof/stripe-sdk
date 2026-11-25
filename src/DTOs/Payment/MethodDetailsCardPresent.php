<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_card_present
 */
final class MethodDetailsCardPresent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'exp_month',
        'exp_year',
        'incremental_authorization_supported',
        'overcapture_supported',
    ];

    protected const array VALIDATION = [
        'brand' => [
            'maxLength' => 5000,
        ],
        'brand_product' => [
            'maxLength' => 5000,
        ],
        'cardholder_name' => [
            'maxLength' => 5000,
        ],
        'country' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'emv_auth_data' => [
            'maxLength' => 5000,
        ],
        'fingerprint' => [
            'maxLength' => 5000,
        ],
        'funding' => [
            'maxLength' => 5000,
        ],
        'generated_card' => [
            'maxLength' => 5000,
        ],
        'issuer' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'location' => [
            'maxLength' => 5000,
        ],
        'network' => [
            'maxLength' => 5000,
        ],
        'network_transaction_id' => [
            'maxLength' => 5000,
        ],
        'reader' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The authorized amount
     */
    public ?int $amount_authorized;
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
     * The [product code](https://stripe.com/docs/card-product-codes) that identifies the specific program or product associated with a card.
     */
    public ?string $brand_product {
        set {
            $this->assigning('brand_product', $value);
            $this->brand_product = $value;
        }
    }
    /**
     * When using manual capture, a future timestamp after which the charge will be automatically refunded if uncaptured.
     * Format: unix-time
     */
    public int $capture_before;
    /**
     * The cardholder name as read from the card, in [ISO 7813](https://en.wikipedia.org/wiki/ISO/IEC_7813) format. May include alphanumeric characters, special characters and first/last name separator (`/`). In some cases, the cardholder name may not be available depending on how the issuer has configured the card. Cardholder name is typically not available on swipe or contactless payments, such as those made with Apple Pay and Google Pay.
     */
    public ?string $cardholder_name {
        set {
            $this->assigning('cardholder_name', $value);
            $this->cardholder_name = $value;
        }
    }
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
     * A high-level description of the type of cards issued in this range.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Authorization response cryptogram.
     */
    public ?string $emv_auth_data {
        set {
            $this->assigning('emv_auth_data', $value);
            $this->emv_auth_data = $value;
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
    public ?string $funding {
        set {
            $this->assigning('funding', $value);
            $this->funding = $value;
        }
    }
    /**
     * ID of a card PaymentMethod generated from the card_present PaymentMethod that may be attached to a Customer for future transactions. Only present if it was possible to generate a card PaymentMethod.
     */
    public ?string $generated_card {
        set {
            $this->assigning('generated_card', $value);
            $this->generated_card = $value;
        }
    }
    /**
     * Whether this [PaymentIntent](https://docs.stripe.com/api/payment_intents) is eligible for incremental authorizations. Request support using [request_incremental_authorization_support](https://docs.stripe.com/api/payment_intents/create#create_payment_intent-payment_method_options-card_present-request_incremental_authorization_support).
     */
    public bool $incremental_authorization_supported;
    /**
     * The name of the card's issuing bank.
     */
    public ?string $issuer {
        set {
            $this->assigning('issuer', $value);
            $this->issuer = $value;
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
     * ID of the [location](https://docs.stripe.com/api/terminal/locations) that this transaction's reader is assigned to.
     */
    public string $location {
        set {
            $this->assigning('location', $value);
            $this->location = $value;
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
     * This is used by the financial networks to identify a transaction. Visa calls this the Transaction ID, Mastercard calls this the Trace ID, and American Express calls this the Acquirer Reference Data. This value will be present if it is returned by the financial network in the authorization response, and null otherwise.
     */
    public ?string $network_transaction_id {
        set {
            $this->assigning('network_transaction_id', $value);
            $this->network_transaction_id = $value;
        }
    }
    /**
     * Details about payments collected offline.
     */
    public ?\StripeSDK\DTOs\Payment\MethodDetailsCardPresentOffline $offline;
    /**
     * Defines whether the authorized amount can be over-captured or not
     */
    public bool $overcapture_supported;
    /**
     * The languages that the issuing bank recommends using for localizing any customer-facing text, as read from the card. Referenced from EMV tag 5F2D, data encoded on the card's chip.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $preferred_locales;
    /**
     * How card details were read in this transaction.
     */
    public ?\StripeSDK\Enums\Payment\MethodDetailsCardPresent\ReadMethodEnum $read_method;
    /**
     * ID of the [reader](https://docs.stripe.com/api/terminal/readers) this transaction was made on.
     */
    public string $reader {
        set {
            $this->assigning('reader', $value);
            $this->reader = $value;
        }
    }
    /**
     * A collection of fields required to be displayed on receipts. Only required for EMV transactions.
     */
    public ?\StripeSDK\DTOs\Payment\MethodDetailsCardPresentReceipt $receipt;
    public \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsCardPresentCommonWallet $wallet;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_authorized' => $value === null || is_int($value) ? $this->amount_authorized = $value : parent::assignMember($name, $value),
            'brand' => $value === null || is_string($value) ? $this->brand = $value : parent::assignMember($name, $value),
            'brand_product' => $value === null || is_string($value) ? $this->brand_product = $value : parent::assignMember($name, $value),
            'capture_before' => is_int($value) ? $this->capture_before = $value : parent::assignMember($name, $value),
            'cardholder_name' => $value === null || is_string($value) ? $this->cardholder_name = $value : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'emv_auth_data' => $value === null || is_string($value) ? $this->emv_auth_data = $value : parent::assignMember($name, $value),
            'exp_month' => is_int($value) ? $this->exp_month = $value : parent::assignMember($name, $value),
            'exp_year' => is_int($value) ? $this->exp_year = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'funding' => $value === null || is_string($value) ? $this->funding = $value : parent::assignMember($name, $value),
            'generated_card' => $value === null || is_string($value) ? $this->generated_card = $value : parent::assignMember($name, $value),
            'incremental_authorization_supported' => is_bool($value) ? $this->incremental_authorization_supported = $value : parent::assignMember($name, $value),
            'issuer' => $value === null || is_string($value) ? $this->issuer = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'location' => is_string($value) ? $this->location = $value : parent::assignMember($name, $value),
            'network' => $value === null || is_string($value) ? $this->network = $value : parent::assignMember($name, $value),
            'network_transaction_id' => $value === null || is_string($value) ? $this->network_transaction_id = $value : parent::assignMember($name, $value),
            'offline' => $value === null || $value instanceof \stdClass ? $this->offline = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodDetailsCardPresentOffline($value) : parent::assignMember($name, $value),
            'overcapture_supported' => is_bool($value) ? $this->overcapture_supported = $value : parent::assignMember($name, $value),
            'preferred_locales' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->preferred_locales = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'read_method' => $value === null || is_string($value) ? $this->read_method = $value === null ? null : \StripeSDK\Enums\Payment\MethodDetailsCardPresent\ReadMethodEnum::from($value) : parent::assignMember($name, $value),
            'reader' => is_string($value) ? $this->reader = $value : parent::assignMember($name, $value),
            'receipt' => $value === null || $value instanceof \stdClass ? $this->receipt = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodDetailsCardPresentReceipt($value) : parent::assignMember($name, $value),
            'wallet' => $value instanceof \stdClass ? $this->wallet = new \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsCardPresentCommonWallet($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
