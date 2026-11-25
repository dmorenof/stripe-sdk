<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ThreeDSecureStandaloneResource;

/**
 * OutcomeDetailsResource
 *
 * Contains details on the result for a standalone 3DS Authentication.
 */
final class OutcomeDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'protocol_version',
        'three_ds_server_transaction_id',
    ];

    protected const array VALIDATION = [
        'acs_transaction_id' => [
            'maxLength' => 5000,
        ],
        'ares' => [
            'maxLength' => 5000,
        ],
        'cryptogram' => [
            'maxLength' => 5000,
        ],
        'ds_transaction_id' => [
            'maxLength' => 5000,
        ],
        'eci' => [
            'maxLength' => 5000,
        ],
        'rreq' => [
            'maxLength' => 5000,
        ],
        'three_ds_server_transaction_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Universally unique transaction identifier assigned by the issuer to identify the transaction.
     */
    public string $acs_transaction_id {
        set {
            $this->assigning('acs_transaction_id', $value);
            $this->acs_transaction_id = $value;
        }
    }
    /**
     * The Authentication Response Message (ARes) is the issuer's response to the AReq message.
     */
    public string $ares {
        set {
            $this->assigning('ares', $value);
            $this->ares = $value;
        }
    }
    /**
     * TransStatus field on the ARes
     */
    public \StripeSDK\Enums\ThreeDSecureStandaloneResource\OutcomeDetails\TransStatusEnum $ares_trans_status;
    /**
     * A 28-character Base64 string proving that 3DS was completed. Store this value securely, and don’t reuse it for multiple authorizations.
     */
    public string $cryptogram {
        set {
            $this->assigning('cryptogram', $value);
            $this->cryptogram = $value;
        }
    }
    /**
     * The 3DS2 Directory Server Transaction ID.
     */
    public string $ds_transaction_id {
        set {
            $this->assigning('ds_transaction_id', $value);
            $this->ds_transaction_id = $value;
        }
    }
    /**
     * Electronic Commerce Indicator provided by the issuer to indicate the result of this 3DS Authentication.
     */
    public string $eci {
        set {
            $this->assigning('eci', $value);
            $this->eci = $value;
        }
    }
    public \StripeSDK\DTOs\ThreeDSecureStandaloneResource\NetworkDetails $network_details;
    /**
     * The 3DS protocol version used for this 3DS Authentication.
     */
    public \StripeSDK\Enums\ThreeDSecureStandaloneResource\OutcomeDetails\ProtocolVersionEnum $protocol_version;
    /**
     * The indicator provided to the issuer by Stripe in the AReq that indicates whether a challenge is requested for this Authentication. This indicator should match the flow_preference you specified but may be overridden (for compliance reasons for example).
     */
    public \StripeSDK\Enums\ThreeDSecureStandaloneResource\OutcomeDetails\ChallengeIndicatorEnum $requestor_challenge_indicator;
    /**
     * The Results Request Message (RReq) communicates the results of the authentication or verification.
     */
    public string $rreq {
        set {
            $this->assigning('rreq', $value);
            $this->rreq = $value;
        }
    }
    /**
     * TransStatus field on the RReq
     */
    public \StripeSDK\Enums\ThreeDSecureStandaloneResource\OutcomeDetails\RreqTransStatus\TransStatusEnum $rreq_trans_status;
    /**
     * Universally unique transaction identifier assigned by Stripe to identify the transaction.
     */
    public string $three_ds_server_transaction_id {
        set {
            $this->assigning('three_ds_server_transaction_id', $value);
            $this->three_ds_server_transaction_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acs_transaction_id' => is_string($value) ? $this->acs_transaction_id = $value : parent::assignMember($name, $value),
            'ares' => is_string($value) ? $this->ares = $value : parent::assignMember($name, $value),
            'ares_trans_status' => is_string($value) ? $this->ares_trans_status = \StripeSDK\Enums\ThreeDSecureStandaloneResource\OutcomeDetails\TransStatusEnum::from($value) : parent::assignMember($name, $value),
            'cryptogram' => is_string($value) ? $this->cryptogram = $value : parent::assignMember($name, $value),
            'ds_transaction_id' => is_string($value) ? $this->ds_transaction_id = $value : parent::assignMember($name, $value),
            'eci' => is_string($value) ? $this->eci = $value : parent::assignMember($name, $value),
            'network_details' => $value instanceof \stdClass ? $this->network_details = new \StripeSDK\DTOs\ThreeDSecureStandaloneResource\NetworkDetails($value) : parent::assignMember($name, $value),
            'protocol_version' => is_string($value) ? $this->protocol_version = \StripeSDK\Enums\ThreeDSecureStandaloneResource\OutcomeDetails\ProtocolVersionEnum::from($value) : parent::assignMember($name, $value),
            'requestor_challenge_indicator' => is_string($value) ? $this->requestor_challenge_indicator = \StripeSDK\Enums\ThreeDSecureStandaloneResource\OutcomeDetails\ChallengeIndicatorEnum::from($value) : parent::assignMember($name, $value),
            'rreq' => is_string($value) ? $this->rreq = $value : parent::assignMember($name, $value),
            'rreq_trans_status' => is_string($value) ? $this->rreq_trans_status = \StripeSDK\Enums\ThreeDSecureStandaloneResource\OutcomeDetails\RreqTransStatus\TransStatusEnum::from($value) : parent::assignMember($name, $value),
            'three_ds_server_transaction_id' => is_string($value) ? $this->three_ds_server_transaction_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
