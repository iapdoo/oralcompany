<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'fileNumber',
        'personalNumber',
        'status',
    ];
    public function getActive()
    {
        return $this->status == 1 ? __('words.active') : __('words.inactive');
    }
}
