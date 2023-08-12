<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WpUserPl extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'tbl_wp_pl';
    protected $connection = 'mysql';
  
    protected $fillable = [
      'first_name',
      'middle_name',
      'last_name',
      'mobile_no',
      'email',
      'pancard',
      'dob',
      'pincode',
      'city',
      'address',
      'employment_type',
      'loan_type',
      'desired_amount',
      'status',
      'created_at',
      'created_by',
      'updated_at',
      'updated_by',
      'delated_at'
  
    ];
}
