<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class User extends \TCG\Voyager\Models\User implements Auditable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $allow_export_all = true;

    protected $fillable = [

        'name',
        'email',
        'password',
    ];
    protected $dates = ['deleted_at'];

    public function scopeActive($query)
    {
        return $query->where('role_id', 7);
    }
    public function role() : BelongsTo
    {
        return $this->belongsTo('TCG\Voyager\Models\Role');
    }
    public function getFullDataAttribute()
    {
        return  $this->name . ' ' . $this->email . ' ' . $this->role->name;
    }
    public $additional_attributes = ['full_data'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $auditExclude = [
        'remember_token',
        'id',
        'email_verified_at',
        'settings',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
