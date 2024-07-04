<?php

namespace App\Models;

use App\Enum\ShareTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Share extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'title',
        'description',
        'discount',
        'share_type',
    ];

    protected function casts(): array
    {
        return [
            'share_type' => ShareTypeEnum::class,
        ];
    }
}
