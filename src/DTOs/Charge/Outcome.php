<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Charge;

/**
 * ChargeOutcome
 */
final class Outcome extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'network_advice_code' => [
            'maxLength' => 5000,
        ],
        'network_decline_code' => [
            'maxLength' => 5000,
        ],
        'network_status' => [
            'maxLength' => 5000,
        ],
        'reason' => [
            'maxLength' => 5000,
        ],
        'risk_level' => [
            'maxLength' => 5000,
        ],
        'seller_message' => [
            'maxLength' => 5000,
        ],
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * An enumerated value providing a more detailed explanation on [how to proceed with an error](https://docs.stripe.com/declines#retrying-issuer-declines).
     */
    public ?\StripeSDK\Enums\Charge\Outcome\AdviceCodeEnum $advice_code;
    /**
     * For charges declined by the network, a 2 digit code which indicates the advice returned by the network on how to proceed with an error.
     */
    public ?string $network_advice_code {
        set {
            $this->assigning('network_advice_code', $value);
            $this->network_advice_code = $value;
        }
    }
    /**
     * For charges declined by the network, an alphanumeric code which indicates the reason the charge failed.
     */
    public ?string $network_decline_code {
        set {
            $this->assigning('network_decline_code', $value);
            $this->network_decline_code = $value;
        }
    }
    /**
     * Possible values are `approved_by_network`, `declined_by_network`, `not_sent_to_network`, and `reversed_after_approval`. The value `reversed_after_approval` indicates the payment was [blocked by Stripe](https://docs.stripe.com/declines#blocked-payments) after bank authorization, and may temporarily appear as "pending" on a cardholder's statement.
     */
    public ?string $network_status {
        set {
            $this->assigning('network_status', $value);
            $this->network_status = $value;
        }
    }
    /**
     * An enumerated value providing a more detailed explanation of the outcome's `type`. Charges blocked by Radar's default block rule have the value `highest_risk_level`. Charges placed in review by Radar's default review rule have the value `elevated_risk_level`. Charges blocked because the payment is unlikely to be authorized have the value `low_probability_of_authorization`. Charges authorized, blocked, or placed in review by custom rules have the value `rule`. See [understanding declines](https://docs.stripe.com/declines) for more details.
     */
    public ?string $reason {
        set {
            $this->assigning('reason', $value);
            $this->reason = $value;
        }
    }
    /**
     * Stripe Radar's evaluation of the riskiness of the payment. Possible values for evaluated payments are `normal`, `elevated`, `highest`. For non-card payments, and card-based payments predating the public assignment of risk levels, this field will have the value `not_assessed`. In the event of an error in the evaluation, this field will have the value `unknown`. This field is only available with Radar.
     */
    public string $risk_level {
        set {
            $this->assigning('risk_level', $value);
            $this->risk_level = $value;
        }
    }
    /**
     * Stripe Radar's evaluation of the riskiness of the payment. Possible values for evaluated payments are between 0 and 100. For non-card payments, card-based payments predating the public assignment of risk scores, or in the event of an error during evaluation, this field will not be present. This field is only available with Radar for Fraud Teams.
     */
    public int $risk_score;
    /**
     * The ID of the Radar rule that matched the payment, if applicable.
     */
    public \StripeSDK\DTOs\Charge\Outcome\RuleDTO $rule;
    /**
     * A human-readable description of the outcome type and reason, designed for you (the recipient of the payment), not your customer.
     */
    public ?string $seller_message {
        set {
            $this->assigning('seller_message', $value);
            $this->seller_message = $value;
        }
    }
    /**
     * Possible values are `authorized`, `manual_review`, `issuer_declined`, `blocked`, and `invalid`. See [understanding declines](https://docs.stripe.com/declines) and [Radar reviews](https://docs.stripe.com/radar/reviews) for details.
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'advice_code' => $value === null || is_string($value) ? $this->advice_code = $value === null ? null : \StripeSDK\Enums\Charge\Outcome\AdviceCodeEnum::from($value) : parent::assignMember($name, $value),
            'network_advice_code' => $value === null || is_string($value) ? $this->network_advice_code = $value : parent::assignMember($name, $value),
            'network_decline_code' => $value === null || is_string($value) ? $this->network_decline_code = $value : parent::assignMember($name, $value),
            'network_status' => $value === null || is_string($value) ? $this->network_status = $value : parent::assignMember($name, $value),
            'reason' => $value === null || is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'risk_level' => is_string($value) ? $this->risk_level = $value : parent::assignMember($name, $value),
            'risk_score' => is_int($value) ? $this->risk_score = $value : parent::assignMember($name, $value),
            'seller_message' => $value === null || is_string($value) ? $this->seller_message = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
