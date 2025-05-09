<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiangVien extends Model
{
    use HasFactory;

    protected $table = 'giangvien';
    protected $fillable = [
        'HoTen', 'MaGiangVien', 'Email', 'SoDienThoai', 'BoMon',
    ];
}
