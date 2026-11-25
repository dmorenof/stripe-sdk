<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodDetailsCrypto;

enum NetworkEnum: string
{
    case Base = 'base';
    case Ethereum = 'ethereum';
    case Polygon = 'polygon';
    case Solana = 'solana';
    case Sui = 'sui';
    case Tempo = 'tempo';
}
