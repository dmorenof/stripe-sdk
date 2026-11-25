<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Charges;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 500,
        ],
        'description' => [
            'maxLength' => 40000,
        ],
        'on_behalf_of' => [
            'maxLength' => 5000,
        ],
        'source' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor' => [
            'maxLength' => 22,
        ],
        'statement_descriptor_suffix' => [
            'maxLength' => 22,
        ],
    ];

    /**
     * Amount intended to be collected by this payment. A positive integer representing how much to charge in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal) (e.g., 100 cents to charge $1.00 or 100 to charge ¥100, a zero-decimal currency). The minimum amount is $0.50 US or [equivalent in charge currency](https://docs.stripe.com/currencies#minimum-and-maximum-charge-amounts). The amount value supports up to eight digits (e.g., a value of 99999999 for a USD charge of $999,999.99).
     */
    public int $amount;
    public int $application_fee;
    /**
     * A fee in cents (or local equivalent) that will be applied to the charge and transferred to the application owner's Stripe account. The request must be made with an OAuth key or the `Stripe-Account` header in order to take an application fee. For more information, see the application fees [documentation](https://docs.stripe.com/connect/direct-charges#collect-fees).
     */
    public int $application_fee_amount;
    /**
     * Whether to immediately capture the charge. Defaults to `true`. When `false`, the charge issues an authorization (or pre-authorization), and will need to be [captured](https://docs.stripe.com/api#capture_charge) later. Uncaptured charges expire after a set number of days (7 by default). For more information, see the [authorizing charges and settling later](https://docs.stripe.com/charges/placing-a-hold) documentation.
     */
    public bool $capture;
    /**
     * A token, like the ones returned by [Stripe.js](https://stripe.com/docs/js).
     */
    public \StripeSDK\Requests\V1\Charges\Post\ChargesCardRequest $card;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * The ID of an existing customer that will be charged in this request.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * An arbitrary string which you can attach to a `Charge` object. It is displayed when in the web interface alongside the charge. Note that if you use Stripe to send automatic email receipts to your customers, your receipt emails will include the `description` of the charge(s) that they are describing.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public \StripeSDK\Requests\V1\Charges\Post\ChargesDestinationRequest $destination;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Charges\Post\ChargesMetadataRequest $metadata;
    /**
     * The Stripe account ID for which these funds are intended. You can specify the business of record as the connected account using the `on_behalf_of` attribute on the charge. For details, see [Creating Separate Charges and Transfers](https://docs.stripe.com/connect/separate-charges-and-transfers#settlement-merchant).
     */
    public string $on_behalf_of {
        set {
            $this->assigning('on_behalf_of', $value);
            $this->on_behalf_of = $value;
        }
    }
    /**
     * Options to configure Radar. See [Radar Session](https://docs.stripe.com/radar/radar-session) for more information.
     */
    public \StripeSDK\Requests\V1\Charges\Post\RadarOptionsRequest $radar_options;
    /**
     * The email address to which this charge's [receipt](https://docs.stripe.com/dashboard/receipts) will be sent. The receipt will not be sent until the charge is paid, and no receipts will be sent for test mode charges. If this charge is for a [Customer](https://docs.stripe.com/api/customers/object), the email address specified here will override the customer's email address. If `receipt_email` is specified for a charge in live mode, a receipt will be sent regardless of your [email settings](https://dashboard.stripe.com/account/emails).
     */
    public string $receipt_email;
    /**
     * Shipping information for the charge. Helps prevent fraud on charges for physical goods.
     */
    public \StripeSDK\Requests\V1\Charges\Post\ChargesShippingRequest $shipping;
    /**
     * A payment source to be charged. This can be the ID of a [card](https://docs.stripe.com/api#cards) (i.e., credit or debit card), a [bank account](https://docs.stripe.com/api#bank_accounts), a [source](https://docs.stripe.com/api#sources), a [token](https://docs.stripe.com/api#tokens), or a [connected account](https://docs.stripe.com/connect/account-debits#charging-a-connected-account). For certain sources---namely, [cards](https://docs.stripe.com/api#cards), [bank accounts](https://docs.stripe.com/api#bank_accounts), and attached [sources](https://docs.stripe.com/api#sources)---you must also pass the ID of the associated customer.
     */
    public string $source {
        set {
            $this->assigning('source', $value);
            $this->source = $value;
        }
    }
    /**
     * For a non-card charge, text that appears on the customer's statement as the statement descriptor. This value overrides the account's default statement descriptor. For information about requirements, including the 22-character limit, see [the Statement Descriptor docs](https://docs.stripe.com/get-started/account/statement-descriptors).
     *
     * For a card charge, this value is ignored unless you don't specify a `statement_descriptor_suffix`, in which case this value is used as the suffix.
     */
    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * Provides information about a card charge. Concatenated to the account's [statement descriptor prefix](https://docs.stripe.com/get-started/account/statement-descriptors#static) to form the complete statement descriptor that appears on the customer's statement. If the account has no prefix value, the suffix is concatenated to the account's statement descriptor.
     */
    public string $statement_descriptor_suffix {
        set {
            $this->assigning('statement_descriptor_suffix', $value);
            $this->statement_descriptor_suffix = $value;
        }
    }
    /**
     * An optional dictionary including the account to automatically transfer to as part of a destination charge. [See the Connect documentation](https://docs.stripe.com/connect/destination-charges) for details.
     */
    public \StripeSDK\Requests\V1\Charges\Post\TransferDataRequest $transfer_data;
    /**
     * A string that identifies this transaction as part of a group. For details, see [Grouping transactions](https://docs.stripe.com/connect/separate-charges-and-transfers#transfer-options).
     */
    public string $transfer_group;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'application_fee' => is_int($value) ? $this->application_fee = $value : parent::assignMember($name, $value),
            'application_fee_amount' => is_int($value) ? $this->application_fee_amount = $value : parent::assignMember($name, $value),
            'capture' => is_bool($value) ? $this->capture = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'on_behalf_of' => is_string($value) ? $this->on_behalf_of = $value : parent::assignMember($name, $value),
            'receipt_email' => is_string($value) ? $this->receipt_email = $value : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'statement_descriptor_suffix' => is_string($value) ? $this->statement_descriptor_suffix = $value : parent::assignMember($name, $value),
            'transfer_group' => is_string($value) ? $this->transfer_group = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
