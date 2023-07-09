<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantDetail extends Model
{
    use HasFactory;

    /**
     * Summary of table
     * @var string
     */
    protected $table = 'applicant_details';

    /**
     * Summary of primaryKey
     * @var string
     */
    protected $primaryKey = 'icnumber';

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'id',
        'app_name',
        'app_ic',
        'app_birthdate',
        'app_age',
        'app_nationality',
        'app_houseaddress',
        'app_addressLatest',
        'app_phoneNumber',
        'app_nation',
        'app_education',
        'app_jobSector',
        'app_jobName',
        'app_jobSalary',
        'app_marriageStatus',
        'app_mualafStatus'
    ];

    /**
     * Summary of applicantDetail
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function applicantDetail()
    {
        return $this->belongsTo(User::class, 'app_ic', 'icnumber');
    }
}
