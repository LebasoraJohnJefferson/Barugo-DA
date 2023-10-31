<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PersonalInformation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'RSBSA_No',
        'Surname',
        'First_Name',
        'Middle_Name',
        'Extension',
        'Address',
        'Mobile_No',
        'Sex',
        'Date_of_birth',
        'Religion',
        'Civil_Status',
        'Name_of_Spouse',
        'Highest_education_qualification',
        'Main_livelihood',

        'Updated_Surname',
        'Updated_First_Name',
        'Updated_Middle_Name',
        'Updated_Extension',
        'Updated_Address',
        'Updated_Mobile_No',
        'Updated_Sex',
        'Updated_Date_of_birth',
        'Updated_Religion',
        'Updated_Civil_Status',
        'Updated_Name_of_Spouse',
        'Updated_Highest_education_qualification',
        'Updated_Main_livelihood',

        'update_status',
        'is_approved',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'personal_informations';


    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'RSBSA_No';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    public function livestock(): HasMany {
        return $this->hasMany(Livestock::class, 'RSBSA_No', 'RSBSA_No');
    }

    public function machinery(): HasMany {
        return $this->hasMany(Machinery::class, 'RSBSA_No', 'RSBSA_No');
    }

    public function area(): HasMany {
        return $this->hasMany(Area::class, 'RSBSA_No', 'RSBSA_No');
    }

    public function poultry(): HasMany {
        return $this->hasMany(Poultry::class, 'RSBSA_No', 'RSBSA_No');
    }

    public function doginformation(): HasMany {
        return $this->hasMany(DogInformation::class, 'RSBSA_No', 'RSBSA_No'); 
    }
}
