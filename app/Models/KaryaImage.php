<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryaImage extends Model
{
    use HasFactory;

    protected $fillable = ['karya_id', 'image_path'];

    public function karya()
    {
        return $this->belongsTo(Karya::class);
    }
}
