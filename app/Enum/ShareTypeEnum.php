<?php

namespace App\Enum;

enum ShareTypeEnum: string {
    case PROMOTION = 'PROMOTION';
    case DISCOUNT = 'DISCOUNT';

    public function title()
    {
        return match ($this) {
            self::DISCOUNT => 'Скидка',
            self::PROMOTION => 'Акция',
        };

    }

    static public function ru(): array
    {
        return [
            self::DISCOUNT->value => 'Скидка',
            self::PROMOTION->value => 'Акция',
        ];
    }
}