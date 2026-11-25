<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\NetworkTokenWalletProvider;

enum ReasonCodesEnum: string
{
    case AccountCardTooNew = 'account_card_too_new';
    case AccountRecentlyChanged = 'account_recently_changed';
    case AccountTooNew = 'account_too_new';
    case AccountTooNewSinceLaunch = 'account_too_new_since_launch';
    case AdditionalDevice = 'additional_device';
    case DataExpired = 'data_expired';
    case DeferIdVDecision = 'defer_id_v_decision';
    case DeviceRecentlyLost = 'device_recently_lost';
    case GoodActivityHistory = 'good_activity_history';
    case HasSuspendedTokens = 'has_suspended_tokens';
    case HighRisk = 'high_risk';
    case InactiveAccount = 'inactive_account';
    case LongAccountTenure = 'long_account_tenure';
    case LowAccountScore = 'low_account_score';
    case LowDeviceScore = 'low_device_score';
    case LowPhoneNumberScore = 'low_phone_number_score';
    case NetworkServiceError = 'network_service_error';
    case OutsideHomeTerritory = 'outside_home_territory';
    case ProvisioningCardholderMismatch = 'provisioning_cardholder_mismatch';
    case ProvisioningDeviceAndCardholderMismatch = 'provisioning_device_and_cardholder_mismatch';
    case ProvisioningDeviceMismatch = 'provisioning_device_mismatch';
    case SameDeviceNoPriorAuthentication = 'same_device_no_prior_authentication';
    case SameDeviceSuccessfulPriorAuthentication = 'same_device_successful_prior_authentication';
    case SoftwareUpdate = 'software_update';
    case SuspiciousActivity = 'suspicious_activity';
    case TooManyDifferentCardholders = 'too_many_different_cardholders';
    case TooManyRecentAttempts = 'too_many_recent_attempts';
    case TooManyRecentTokens = 'too_many_recent_tokens';
}
