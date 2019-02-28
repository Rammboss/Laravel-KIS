<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use OwenIt\Auditing\Contracts\Auditable;

class Anamnesis extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use Notifiable;

    protected $table = 'anamnesis_questionaire';

    protected $fillable = [
        'patient_id',
        'recent_anamnesis',
        'previous_anamnesis',
        'vegetative_anamnesis',
        'risk_anamnesis',
        'drug_anamnesis',
        'gender_based_anamnesis',
        'family_anamnesis',
        'social_anamnesis',
        'further_anamnesis',
        'suspected_diagnosis',
        'created_at',
        'updated_at'
    ];

    public function patient()
    {
        return $this->hasOne('App\Patient');
    }

}
