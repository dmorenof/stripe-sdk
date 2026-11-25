<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * refund_destination_details
 */
final class RefundDestinationDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $affirm;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $afterpay_clearpay;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $alipay;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $alma;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $amazon_pay;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $au_bank_transfer;
    public \StripeSDK\DTOs\RefundDestinationDetails\Blik $blik;
    public \StripeSDK\DTOs\RefundDestinationDetails\BrBankTransfer $br_bank_transfer;
    public \StripeSDK\DTOs\RefundDestinationDetails\Card $card;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $cashapp;
    public \StripeSDK\DTOs\RefundDestinationDetails\Crypto $crypto;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $customer_cash_balance;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $eps;
    public \StripeSDK\DTOs\RefundDestinationDetails\EuBankTransfer $eu_bank_transfer;
    public \StripeSDK\DTOs\RefundDestinationDetails\GbBankTransfer $gb_bank_transfer;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $giropay;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $grabpay;
    public \StripeSDK\DTOs\RefundDestinationDetails\JpBankTransfer $jp_bank_transfer;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $klarna;
    public \StripeSDK\DTOs\RefundDestinationDetails\MbWay $mb_way;
    public \StripeSDK\DTOs\RefundDestinationDetails\Multibanco $multibanco;
    public \StripeSDK\DTOs\RefundDestinationDetails\MxBankTransfer $mx_bank_transfer;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $nz_bank_transfer;
    public \StripeSDK\DTOs\RefundDestinationDetails\P24 $p24;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $paynow;
    public \StripeSDK\DTOs\RefundDestinationDetails\Paypal $paypal;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $pix;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $revolut;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $scalapay;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $sofort;
    public \StripeSDK\DTOs\RefundDestinationDetails\Swish $swish;
    public \StripeSDK\DTOs\RefundDestinationDetails\ThBankTransfer $th_bank_transfer;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $twint;
    /**
     * The type of transaction-specific details of the payment method used in the refund (e.g., `card`). An additional hash is included on `destination_details` with a name matching this value. It contains information specific to the refund transaction.
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }
    public \StripeSDK\DTOs\RefundDestinationDetails\UsBankTransfer $us_bank_transfer;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $wechat_pay;
    public \StripeSDK\DTOs\DestinationDetailsUnimplemented $zip;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'blik' => $value instanceof \stdClass ? $this->blik = new \StripeSDK\DTOs\RefundDestinationDetails\Blik($value) : parent::assignMember($name, $value),
            'br_bank_transfer' => $value instanceof \stdClass ? $this->br_bank_transfer = new \StripeSDK\DTOs\RefundDestinationDetails\BrBankTransfer($value) : parent::assignMember($name, $value),
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\RefundDestinationDetails\Card($value) : parent::assignMember($name, $value),
            'crypto' => $value instanceof \stdClass ? $this->crypto = new \StripeSDK\DTOs\RefundDestinationDetails\Crypto($value) : parent::assignMember($name, $value),
            'eu_bank_transfer' => $value instanceof \stdClass ? $this->eu_bank_transfer = new \StripeSDK\DTOs\RefundDestinationDetails\EuBankTransfer($value) : parent::assignMember($name, $value),
            'gb_bank_transfer' => $value instanceof \stdClass ? $this->gb_bank_transfer = new \StripeSDK\DTOs\RefundDestinationDetails\GbBankTransfer($value) : parent::assignMember($name, $value),
            'jp_bank_transfer' => $value instanceof \stdClass ? $this->jp_bank_transfer = new \StripeSDK\DTOs\RefundDestinationDetails\JpBankTransfer($value) : parent::assignMember($name, $value),
            'mb_way' => $value instanceof \stdClass ? $this->mb_way = new \StripeSDK\DTOs\RefundDestinationDetails\MbWay($value) : parent::assignMember($name, $value),
            'multibanco' => $value instanceof \stdClass ? $this->multibanco = new \StripeSDK\DTOs\RefundDestinationDetails\Multibanco($value) : parent::assignMember($name, $value),
            'mx_bank_transfer' => $value instanceof \stdClass ? $this->mx_bank_transfer = new \StripeSDK\DTOs\RefundDestinationDetails\MxBankTransfer($value) : parent::assignMember($name, $value),
            'p24' => $value instanceof \stdClass ? $this->p24 = new \StripeSDK\DTOs\RefundDestinationDetails\P24($value) : parent::assignMember($name, $value),
            'paypal' => $value instanceof \stdClass ? $this->paypal = new \StripeSDK\DTOs\RefundDestinationDetails\Paypal($value) : parent::assignMember($name, $value),
            'swish' => $value instanceof \stdClass ? $this->swish = new \StripeSDK\DTOs\RefundDestinationDetails\Swish($value) : parent::assignMember($name, $value),
            'th_bank_transfer' => $value instanceof \stdClass ? $this->th_bank_transfer = new \StripeSDK\DTOs\RefundDestinationDetails\ThBankTransfer($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'us_bank_transfer' => $value instanceof \stdClass ? $this->us_bank_transfer = new \StripeSDK\DTOs\RefundDestinationDetails\UsBankTransfer($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
