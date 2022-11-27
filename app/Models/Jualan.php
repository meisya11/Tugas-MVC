<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jualan extends Model
{
    use HasFactory;
    protected $table = 'jualan';
    protected $fillable =['nama','produk','jumlah','alamat'];
}
