<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ByConfigurationWifiRequestVariant1;

enum ByConfigurationWifiRequestVariant1TypeEnum: string
{
    case EnterpriseEapPeap = 'enterprise_eap_peap';
    case EnterpriseEapTls = 'enterprise_eap_tls';
    case PersonalPsk = 'personal_psk';
}
