<?php

namespace App\Models;

use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['first_name','last_name','telephone','email','address_1','postcode','address_2','town'];

    public function animals()
    {
        // applying a hasMany relationship method as owners can have many pets
        return $this->hasMany(Animal::class);
    }

    public static function haveWeBananas($number)
    {
        if ($number === 0) {
            return "No we have no bananas";
        }

        if ($number === 1) {
            return "Yes we have 1 banana";
        }

        return "Yes we have {$number} bananas";
    }

    public static function emailExists($email)
    {
        $dbEmails = Owner::where('email','=',$email)->get();
        
        if ($dbEmails->count() === 0){
            return false;
        } else {
            return true;
        }
    }

    public static function validPhoneNumber($number)
    {
        if(strlen($number)<11 || strlen($number)>14){
            return false;
        } 
        else if(\preg_match("/[A-z]/",$number)){
            return false;
        }
        return true;
    }

    public function fullName()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function fullAddress()
    {
        return "{$this->address_1}, {$this->address_2}, {$this->town}, {$this->postcode}";
    }

    public function formattedPhoneNumber()
    {
        $prefix = Str::substr($this->telephone,0,4);
        $area = Str::substr($this->telephone,4,3);
        $unique = Str::substr($this->telephone,7);

        return "{$prefix} {$area} {$unique}";
    }
}
