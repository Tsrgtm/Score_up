<?php

namespace App\Enums;

enum SubscriptionType: string {
    case FREE = 'free';
    case TRAIL = '3-days-trail';
    case WEEKLY = '7-days-unlimited';
    case MONTHLY = '1-month-unlimited';
    case YEARLY = '1-year-unlimited';

    public static function values(): array {
        return array_column(self::cases(), 'value');
    }
}