<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\Post\PaymentSettings;

final class MethodTypesRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\MethodTypesRequest10Variant1Array\Request10Variant1Collection::class, \StripeSDK\Enums\MethodTypesRequest10Variant2\Request10Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'string',
                'enum' => [
                    'ach_credit_transfer',
                    'ach_debit',
                    'acss_debit',
                    'affirm',
                    'alipay',
                    'amazon_pay',
                    'au_becs_debit',
                    'bacs_debit',
                    'bancontact',
                    'billie',
                    'blik',
                    'boleto',
                    'card',
                    'cashapp',
                    'crypto',
                    'custom',
                    'customer_balance',
                    'eps',
                    'fpx',
                    'giropay',
                    'grabpay',
                    'ideal',
                    'jp_credit_transfer',
                    'kakao_pay',
                    'klarna',
                    'konbini',
                    'kr_card',
                    'link',
                    'mb_way',
                    'multibanco',
                    'naver_pay',
                    'nz_bank_account',
                    'p24',
                    'pay_by_bank',
                    'payco',
                    'paynow',
                    'paypal',
                    'payto',
                    'pix',
                    'promptpay',
                    'revolut_pay',
                    'satispay',
                    'sepa_credit_transfer',
                    'sepa_debit',
                    'sofort',
                    'swish',
                    'twint',
                    'upi',
                    'us_bank_account',
                    'wechat_pay',
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
