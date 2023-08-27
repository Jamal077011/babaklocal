<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsore extends Model
{
    use HasFactory;
    protected $table = 'sponsores';

    protected $fillable = [ 'ar_name','en_name', 'employer_id', 'company_id','phone', 'gender', 'email', 'job_title_id', 'nationality_id', 'country_id', 'relative_relation'];

    public function user()
    {
        return $this->belongsTo(Employer::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
   

    public function nationality()
    {
        
        return $this->belongsTo(Nationality::class);
    }
    public function jobTitle()
    {
        return $this->belongsTo(jobTitle::class);
    }
}
