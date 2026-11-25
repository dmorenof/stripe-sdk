<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Card
 *
 * You can store multiple cards on a customer in order to charge the customer
 * later. You can also store multiple debit cards on a recipient in order to
 * transfer to those cards later.
 *
 * Related guide: [Card payments with Sources](https://docs.stripe.com/sources/cards)
 */
final class Card extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'brand',
        'exp_month',
        'exp_year',
        'funding',
        'id',
        'last4',
        'object_',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'address_city' => [
            'maxLength' => 5000,
        ],
        'address_country' => [
            'maxLength' => 5000,
        ],
        'address_line1' => [
            'maxLength' => 5000,
        ],
        'address_line1_check' => [
            'maxLength' => 5000,
        ],
        'address_line2' => [
            'maxLength' => 5000,
        ],
        'address_state' => [
            'maxLength' => 5000,
        ],
        'address_zip' => [
            'maxLength' => 5000,
        ],
        'address_zip_check' => [
            'maxLength' => 5000,
        ],
        'brand' => [
            'maxLength' => 5000,
        ],
        'country' => [
            'maxLength' => 5000,
        ],
        'cvc_check' => [
            'maxLength' => 5000,
        ],
        'dynamic_last4' => [
            'maxLength' => 5000,
        ],
        'fingerprint' => [
            'maxLength' => 5000,
        ],
        'funding' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'status' => [
            'maxLength' => 5000,
        ],
        'tokenization_method' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\DTOs\Card\AccountDTO $account;
    /**
     * City/District/Suburb/Town/Village.
     */
    public ?string $address_city {
        set {
            $this->assigning('address_city', $value);
            $this->address_city = $value;
        }
    }
    /**
     * Billing address country, if provided when creating card.
     */
    public ?string $address_country {
        set {
            $this->assigning('address_country', $value);
            $this->address_country = $value;
        }
    }
    /**
     * Address line 1 (Street address/PO Box/Company name).
     */
    public ?string $address_line1 {
        set {
            $this->assigning('address_line1', $value);
            $this->address_line1 = $value;
        }
    }
    /**
     * If `address_line1` was provided, results of the check: `pass`, `fail`, `unavailable`, or `unchecked`.
     */
    public ?string $address_line1_check {
        set {
            $this->assigning('address_line1_check', $value);
            $this->address_line1_check = $value;
        }
    }
    /**
     * Address line 2 (Apartment/Suite/Unit/Building).
     */
    public ?string $address_line2 {
        set {
            $this->assigning('address_line2', $value);
            $this->address_line2 = $value;
        }
    }
    /**
     * State/County/Province/Region.
     */
    public ?string $address_state {
        set {
            $this->assigning('address_state', $value);
            $this->address_state = $value;
        }
    }
    /**
     * ZIP or postal code.
     */
    public ?string $address_zip {
        set {
            $this->assigning('address_zip', $value);
            $this->address_zip = $value;
        }
    }
    /**
     * If `address_zip` was provided, results of the check: `pass`, `fail`, `unavailable`, or `unchecked`.
     */
    public ?string $address_zip_check {
        set {
            $this->assigning('address_zip_check', $value);
            $this->address_zip_check = $value;
        }
    }
    /**
     * This field indicates whether this payment method can be shown again to its customer in a checkout flow. Stripe products such as Checkout and Elements use this field to determine whether a payment method can be shown as a saved payment method in a checkout flow. The field defaults to “unspecified”.
     */
    public ?\StripeSDK\Enums\Card\AllowRedisplayEnum $allow_redisplay;
    /**
     * A set of available payout methods for this card. Only values from this set should be passed as the `method` when creating a payout.
     */
    public ?\StripeSDK\Collections\Card\PayoutMethodsCollection $available_payout_methods;
    /**
     * Card brand. Can be `American Express`, `Cartes Bancaires`, `Diners Club`, `Discover`, `Eftpos Australia`, `Girocard`, `JCB`, `MasterCard`, `UnionPay`, `Visa`, or `Unknown`.
     */
    public string $brand {
        set {
            $this->assigning('brand', $value);
            $this->brand = $value;
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
     * Three-letter [ISO code for currency](https://www.iso.org/iso-4217-currency-codes.html) in lowercase. Must be a [supported currency](https://docs.stripe.com/currencies). Only applicable on accounts (not customers or recipients). The card can be used as a transfer destination for funds in this currency. This property is only available when returned as an [External Account](/api/external_account_cards/object) where [controller.is_controller](/api/accounts/object#account_object-controller-is_controller) is `true`.
     * Format: currency
     */
    public ?string $currency;
    /**
     * The customer that this card belongs to. This attribute will not be in the card object if the card belongs to an account or recipient instead.
     */
    public ?\StripeSDK\DTOs\Card\CustomerDTO $customer;
    /**
     * If a CVC was provided, results of the check: `pass`, `fail`, `unavailable`, or `unchecked`. A result of unchecked indicates that CVC was provided but hasn't been checked yet. Checks are typically performed when attaching a card to a Customer object, or when creating a charge. For more details, see [Check if a card is valid without a charge](https://support.stripe.com/questions/check-if-a-card-is-valid-without-a-charge).
     */
    public ?string $cvc_check {
        set {
            $this->assigning('cvc_check', $value);
            $this->cvc_check = $value;
        }
    }
    /**
     * Whether this card is the default external account for its currency. This property is only available for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `application`, which includes Custom accounts.
     */
    public ?bool $default_for_currency;
    /**
     * (For tokenized numbers only.) The last four digits of the device account number.
     */
    public ?string $dynamic_last4 {
        set {
            $this->assigning('dynamic_last4', $value);
            $this->dynamic_last4 = $value;
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
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
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
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Card\MetadataMap $metadata;
    /**
     * Cardholder name.
     */
    public ?string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \StripeSDK\DTOs\TokenCardNetworks $networks;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Card\ObjectEnum $object_;
    /**
     * Status of a card based on the card issuer.
     */
    public ?\StripeSDK\Enums\Card\RegulatedStatusEnum $regulated_status;
    /**
     * For external accounts that are cards, possible values are `new` and `errored`. If a payout fails, the status is set to `errored` and [scheduled payouts](https://stripe.com/docs/payouts#payout-schedule) are stopped until account details are updated.
     */
    public ?string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    /**
     * If the card number is tokenized, this is the method that was used. Can be `android_pay` (includes Google Pay), `apple_pay`, `masterpass`, `visa_checkout`, or null.
     */
    public ?string $tokenization_method {
        set {
            $this->assigning('tokenization_method', $value);
            $this->tokenization_method = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_city' => $value === null || is_string($value) ? $this->address_city = $value : parent::assignMember($name, $value),
            'address_country' => $value === null || is_string($value) ? $this->address_country = $value : parent::assignMember($name, $value),
            'address_line1' => $value === null || is_string($value) ? $this->address_line1 = $value : parent::assignMember($name, $value),
            'address_line1_check' => $value === null || is_string($value) ? $this->address_line1_check = $value : parent::assignMember($name, $value),
            'address_line2' => $value === null || is_string($value) ? $this->address_line2 = $value : parent::assignMember($name, $value),
            'address_state' => $value === null || is_string($value) ? $this->address_state = $value : parent::assignMember($name, $value),
            'address_zip' => $value === null || is_string($value) ? $this->address_zip = $value : parent::assignMember($name, $value),
            'address_zip_check' => $value === null || is_string($value) ? $this->address_zip_check = $value : parent::assignMember($name, $value),
            'allow_redisplay' => $value === null || is_string($value) ? $this->allow_redisplay = $value === null ? null : \StripeSDK\Enums\Card\AllowRedisplayEnum::from($value) : parent::assignMember($name, $value),
            'brand' => is_string($value) ? $this->brand = $value : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'currency' => $value === null || is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'cvc_check' => $value === null || is_string($value) ? $this->cvc_check = $value : parent::assignMember($name, $value),
            'default_for_currency' => $value === null || is_bool($value) ? $this->default_for_currency = $value : parent::assignMember($name, $value),
            'dynamic_last4' => $value === null || is_string($value) ? $this->dynamic_last4 = $value : parent::assignMember($name, $value),
            'exp_month' => is_int($value) ? $this->exp_month = $value : parent::assignMember($name, $value),
            'exp_year' => is_int($value) ? $this->exp_year = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'funding' => is_string($value) ? $this->funding = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'last4' => is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'networks' => $value instanceof \stdClass ? $this->networks = new \StripeSDK\DTOs\TokenCardNetworks($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Card\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'regulated_status' => $value === null || is_string($value) ? $this->regulated_status = $value === null ? null : \StripeSDK\Enums\Card\RegulatedStatusEnum::from($value) : parent::assignMember($name, $value),
            'status' => $value === null || is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'tokenization_method' => $value === null || is_string($value) ? $this->tokenization_method = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
