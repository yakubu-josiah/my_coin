<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $fillabe = 
    [
        'signup_bonus',
        'referral_direct_reward_perc',
        'referral_indirect_reward_perc',
        'referral_reward_count',
        'referral_level',
        'guider_qualification',
        'guider_added_bonus_perc',
        'manager_qualification',
        'manager_added_bonus_perc',
        'activation_fee',
        'account_name',
        'account_number',
        'recomit_perc',
        'bank_name', 
        'activation_duration', 
        'activation_grace_period', 
        'activation_type', 
        'min_invest_amount', 
        'max_invest_amount', 
        'roi_perc', 
        'invest_duration',
        'auction_time',
        'auction_time_end',
        'auto_merge', 
        'merged_payer_instruction', 
        'merged_payee_instruction', 
        'donation_request_instructions', 
        'withdrawal_request_instructions', 
        'allowed_pending', 
        'telegram_token', 
        'email_verify', 
        'sms_verify', 
        'sms_note', 
        'sms_gateway_url', 
        'activation_fee_receiver', 
        'auction_off_mssg', 
        'min_withdraw', 
    ];
    use HasFactory;
}
