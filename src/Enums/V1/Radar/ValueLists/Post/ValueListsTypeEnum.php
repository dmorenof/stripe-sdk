<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Radar\ValueLists\Post;

enum ValueListsTypeEnum: string
{
    case Account = 'account';
    case CardBin = 'card_bin';
    case CardFingerprint = 'card_fingerprint';
    case CaseSensitiveString = 'case_sensitive_string';
    case Country = 'country';
    case CryptoFingerprint = 'crypto_fingerprint';
    case CustomerId = 'customer_id';
    case Email = 'email';
    case IpAddress = 'ip_address';
    case SepaDebitFingerprint = 'sepa_debit_fingerprint';
    case String_ = 'string';
    case UsBankAccountFingerprint = 'us_bank_account_fingerprint';
}
