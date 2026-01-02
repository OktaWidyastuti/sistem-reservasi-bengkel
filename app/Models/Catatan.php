<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Catatan extends Model
{
    use HasFactory;
    use Notifiable;
    protected $fillable = [
        'title',
        'deskripsi',
    ];

    public function items()
    {
        return $this->hasMany(CatatanItem::class, 'note_id');
    }
}
