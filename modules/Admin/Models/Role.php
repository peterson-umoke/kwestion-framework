<?php

namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ["name", "description", 'type'];

    /**
     * The roles that belong to the user.
     */
    public function admins()
    {
        return $this->belongsToMany('Modules\Admin\Models\Admin', 'role_admin', 'admin_id', 'role_id');
    }

    /**
     * The roles that belong to the user.
     */
    public function users()
    {
        return $this->belongsToMany('Modules\Admin\Models\User');
    }
}
