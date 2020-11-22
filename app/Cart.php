<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Cart extends Model
{
    protected $fillable = [
        'id_productCart', 'id_userCart', 'jumlah', 'size', 'total_harga', 'isPay', 'kategori'
    ];

    public function getCreatedAtAttribute(){
        if(!is_null($this->attributes['created_at'])){
            return Carbon::parse($this->attributes['created_at'])->format('Y-m-d H:i:s');
        }
    }

    public function getUpdatedAtAttribute(){
        if(!is_null($this->attributes['created_at'])){
            return Carbon::parse($this->attributes['updated_at'])->format('Y-m-d H:i:s');
        }
    }
}