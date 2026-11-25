<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\AnyOfExcludedPaymentMethodTypes;

final class MethodTypesRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\MethodTypesRequest9Variant1Array\Request9Variant1Collection::class, \StripeSDK\Enums\MethodTypesRequest9Variant2\Request9Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'string',
                'enum' => [
                    'acss_debit',
                    'affirm',
                    'afterpay_clearpay',
                    'alipay',
                    'alma',
                    'amazon_pay',
                    'au_becs_debit',
                    'bacs_debit',
                    'bancontact',
                    'billie',
                    'bizum',
                    'blik',
                    'boleto',
                    'card',
                    'cashapp',
                    'crypto',
                    'customer_balance',
                    'eps',
                    'fpx',
                    'giropay',
                    'grabpay',
                    'ideal',
                    'kakao_pay',
                    'klarna',
                    'konbini',
                    'kr_card',
                    'mb_way',
                    'mobilepay',
                    'multibanco',
                    'naver_pay',
                    'nz_bank_account',
                    'oxxo',
                    'p24',
                    'pay_by_bank',
                    'payco',
                    'paynow',
                    'paypal',
                    'paypay',
                    'payto',
                    'pix',
                    'promptpay',
                    'revolut_pay',
                    'samsung_pay',
                    'satispay',
                    'scalapay',
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
