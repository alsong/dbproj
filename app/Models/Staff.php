<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'staff_number';

    public $timestamps = false;

    public $fillable = ['name', 'position', 'branch_number', 'salary'];

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_number', 'branch_number');
    }
}
