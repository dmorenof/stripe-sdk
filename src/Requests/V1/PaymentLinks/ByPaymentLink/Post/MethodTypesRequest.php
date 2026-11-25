<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post;

final class MethodTypesRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\MethodTypesRequest7Variant1Array\Request7Variant1Collection::class, \StripeSDK\Enums\MethodTypesRequest7Variant2\Request7Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'string',
                'enum' => [
                    'affirm',
                    'afterpay_clearpay',
                    'alipay',
                    'alma',
                    'au_becs_debit',
                    'bacs_debit',
                    'bancontact',
                    'billie',
                    'bizum',
                    'blik',
                    'boleto',
                    'card',
                    'cashapp',
                    'eps',
                    'fpx',
                    'giropay',
                    'grabpay',
                    'ideal',
                    'klarna',
                    'konbini',
                    'link',
                    'mb_way',
                    'mobilepay',
                    'multibanco',
                    'oxxo',
                    'p24',
                    'pay_by_bank',
                    'paynow',
                    'paypal',
                    'paypay',
                    'payto',
                    'pix',
                    'promptpay',
                    'satispay',
                    'sepa_debit',
                    'sequra',
                    'sofort',
                    'sunbit',
                    'swish',
                    'twint',
                    'upi',
                    'us_bank_account',
                    'wechat_pay',
                    'zip',
                ],
            ],
        ],
        [
            'kind' => 'string',
            'enum' => [
                '',
            ],
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
