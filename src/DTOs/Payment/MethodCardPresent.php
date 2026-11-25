<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_card_present
 */
final class MethodCardPresent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'exp_month',
        'exp_year',
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
        'fingerprint' => [
            'maxLength' => 5000,
        ],
        'funding' => [
            'maxLength' => 5000,
        ],
        'issuer' => [
            'maxLength' => 5000,
        ],
        'last4' => [
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
     * The [product code](https://stripe.com/docs/card-product-codes) that identifies the specific program or product associated with a card.
     */
    public ?string $brand_product {
        set {
            $this->assigning('brand_product', $value);
            $this->brand_product = $value;
        }
    }
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
     * Contains information about card networks that can be used to process the payment.
     */
    public ?\StripeSDK\DTOs\Payment\MethodCardPresentNetworks $networks;
    /**
     * Details about payment methods collected offline.
     */
    public ?\StripeSDK\DTOs\Payment\MethodDetailsCardPresentOffline $offline;
    /**
     * The languages that the issuing bank recommends using for localizing any customer-facing text, as read from the card. Referenced from EMV tag 5F2D, data encoded on the card's chip.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $preferred_locales;
    /**
     * How card details were read in this transaction.
     */
    public ?\StripeSDK\Enums\Payment\MethodCardPresent\ReadMethodEnum $read_method;
    public \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsCardPresentCommonWallet $wallet;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brand' => $value === null || is_string($value) ? $this->brand = $value : parent::assignMember($name, $value),
            'brand_product' => $value === null || is_string($value) ? $this->brand_product = $value : parent::assignMember($name, $value),
            'cardholder_name' => $value === null || is_string($value) ? $this->cardholder_name = $value : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'exp_month' => is_int($value) ? $this->exp_month = $value : parent::assignMember($name, $value),
            'exp_year' => is_int($value) ? $this->exp_year = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'funding' => $value === null || is_string($value) ? $this->funding = $value : parent::assignMember($name, $value),
            'issuer' => $value === null || is_string($value) ? $this->issuer = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'networks' => $value === null || $value instanceof \stdClass ? $this->networks = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodCardPresentNetworks($value) : parent::assignMember($name, $value),
            'offline' => $value === null || $value instanceof \stdClass ? $this->offline = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodDetailsCardPresentOffline($value) : parent::assignMember($name, $value),
            'preferred_locales' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->preferred_locales = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'read_method' => $value === null || is_string($value) ? $this->read_method = $value === null ? null : \StripeSDK\Enums\Payment\MethodCardPresent\ReadMethodEnum::from($value) : parent::assignMember($name, $value),
            'wallet' => $value instanceof \stdClass ? $this->wallet = new \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsCardPresentCommonWallet($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
