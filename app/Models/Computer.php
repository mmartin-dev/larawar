<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Computer extends Model
{
    protected function model(): Attribute
    {
        return Attribute::make(
            set: function (string $value){
                return strtolower($value);
            }
            //AQUI PUEDE IR EL GET
        );
        return Attribute::make(
            get: function (string $value){
                return strtoupper($value);
            }
            //AQUI PUEDE IR EL SET
        );
        
    }
}