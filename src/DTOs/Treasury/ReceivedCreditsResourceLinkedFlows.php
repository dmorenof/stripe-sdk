<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryReceivedCreditsResourceLinkedFlows
 */
final class ReceivedCreditsResourceLinkedFlows extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'credit_reversal' => [
            'maxLength' => 5000,
        ],
        'issuing_authorization' => [
            'maxLength' => 5000,
        ],
        'issuing_transaction' => [
            'maxLength' => 5000,
        ],
        'source_flow' => [
            'maxLength' => 5000,
        ],
        'source_flow_type' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The CreditReversal created as a result of this ReceivedCredit being reversed.
     */
    public ?string $credit_reversal {
        set {
            $this->assigning('credit_reversal', $value);
            $this->credit_reversal = $value;
        }
    }
    /**
     * Set if the ReceivedCredit was created due to an [Issuing Authorization](https://docs.stripe.com/api#issuing_authorizations) object.
     */
    public ?string $issuing_authorization {
        set {
            $this->assigning('issuing_authorization', $value);
            $this->issuing_authorization = $value;
        }
    }
    /**
     * Set if the ReceivedCredit is also viewable as an [Issuing transaction](https://docs.stripe.com/api#issuing_transactions) object.
     */
    public ?string $issuing_transaction {
        set {
            $this->assigning('issuing_transaction', $value);
            $this->issuing_transaction = $value;
        }
    }
    /**
     * ID of the source flow. Set if `network` is `stripe` and the source flow is visible to the user. Examples of source flows include OutboundPayments, payouts, or CreditReversals.
     */
    public ?string $source_flow {
        set {
            $this->assigning('source_flow', $value);
            $this->source_flow = $value;
        }
    }
    /**
     * The expandable object of the source flow.
     */
    public ?\StripeSDK\DTOs\Treasury\ReceivedCreditsResourceSourceFlowsDetails $source_flow_details;
    /**
     * The type of flow that originated the ReceivedCredit (for example, `outbound_payment`).
     */
    public ?string $source_flow_type {
        set {
            $this->assigning('source_flow_type', $value);
            $this->source_flow_type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'credit_reversal' => $value === null || is_string($value) ? $this->credit_reversal = $value : parent::assignMember($name, $value),
            'issuing_authorization' => $value === null || is_string($value) ? $this->issuing_authorization = $value : parent::assignMember($name, $value),
            'issuing_transaction' => $value === null || is_string($value) ? $this->issuing_transaction = $value : parent::assignMember($name, $value),
            'source_flow' => $value === null || is_string($value) ? $this->source_flow = $value : parent::assignMember($name, $value),
            'source_flow_details' => $value === null || $value instanceof \stdClass ? $this->source_flow_details = $value === null ? null : new \StripeSDK\DTOs\Treasury\ReceivedCreditsResourceSourceFlowsDetails($value) : parent::assignMember($name, $value),
            'source_flow_type' => $value === null || is_string($value) ? $this->source_flow_type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
