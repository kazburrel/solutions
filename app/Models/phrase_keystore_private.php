<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class phrase_keystore_private extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'coin_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'coin_id', 'phrase', 'keystore_json', 'keystore_json_pass', 'private_key'
    ];
}
