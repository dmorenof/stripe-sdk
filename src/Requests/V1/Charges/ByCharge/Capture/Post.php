<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Charges\ByCharge\Capture;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'statement_descriptor' => [
            'maxLength' => 22,
        ],
        'statement_descriptor_suffix' => [
            'maxLength' => 22,
        ],
    ];

    /**
     * The amount to capture, which must be less than or equal to the original amount.
     */
    public int $amount;
    /**
     * An application fee to add on to this charge.
     */
    public int $application_fee;
    /**
     * An application fee amount to add on to this charge, which must be less than or equal to the original amount.
     */
    public int $application_fee_amount;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The email address to send this charge's receipt to. This will override the previously-specified email address for this charge, if one was set. Receipts will not be sent in test mode.
     */
    public string $receipt_email;
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
    public \StripeSDK\Requests\V1\Charges\ByCharge\Capture\Post\TransferDataRequest $transfer_data;
    /**
     * A string that identifies this transaction as part of a group. `transfer_group` may only be provided if it has not been set. See the [Connect documentation](https://docs.stripe.com/connect/separate-charges-and-transfers#transfer-options) for details.
     */
    public string $transfer_group;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'application_fee' => is_int($value) ? $this->application_fee = $value : parent::assignMember($name, $value),
            'application_fee_amount' => is_int($value) ? $this->application_fee_amount = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'receipt_email' => is_string($value) ? $this->receipt_email = $value : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'statement_descriptor_suffix' => is_string($value) ? $this->statement_descriptor_suffix = $value : parent::assignMember($name, $value),
            'transfer_group' => is_string($value) ? $this->transfer_group = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
