<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ConfigurationsWifiRequestVariant1;

enum ConfigurationsWifiRequestVariant1TypeEnum: string
{
    case EnterpriseEapPeap = 'enterprise_eap_peap';
    case EnterpriseEapTls = 'enterprise_eap_tls';
    case PersonalPsk = 'personal_psk';
}
