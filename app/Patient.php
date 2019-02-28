<?php

namespace App;

use Bvipul\EncryptsAttributes\Traits\EncryptsAttributes;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Patient extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable, EncryptsAttributes;

    protected $fillable = [
        'first_name',
        'name',
        'comment',
        'address',
        //'phone',
        //'mobile',
        'mail',
        //'release_date',
      //  'clinic_id',
      //  'gender',
        //'date_of_birth',
        //'room',
        //'health_insurance_number',
        //'ward_id',
        //'general_practitioner_id',
        //'health_insurance_id'
    ];

    public function ward()
    {
        return $this->hasOne('App\Ward');
    }

    public function health_insurence()
    {
        return $this->hasOne('App\Health_Insurance');
    }

    public function general_practitioner()
    {
        return $this->hasOne('App\General_Practitioner');
    }

    public function anamnesis()
    {
        return $this->hasOne('App\Anamnesis');
    }

}
