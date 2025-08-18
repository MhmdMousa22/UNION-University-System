<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'gender', 'email','position', 'salary', 'admin_id'];

    public function admin() {
        return $this->belongsTo(Admin::class);
    }
}
