<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;


class Pelanggan extends Model
{
protected $table = 'pelanggan';
protected $primaryKey = 'pelanggan_id';
protected $fillable = ['first_name',
'last_name',
'birthday',
'gender',
'email',
'phone',];

public function scopeFilter(Builder $query, $request, array $filterableColumns): Builder
{
    foreach ($filterableColumns as $column) {
        if ($request->filled($column)) {
            // Gunakan where dengan LOWER supaya case-insensitive dan aman
            $query->whereRaw("LOWER(TRIM($column)) = ?", [strtolower(trim($request->input($column)))]);
        }
    }
    return $query;
}

public function scopeSearch(Builder $query, $request, array $columns): Builder
{
    if ($request->filled('search')) {
        $search = $request->input('search');
        $query->where(function($q) use ($columns, $search) {
            foreach ($columns as $column) {
                $q->orWhere($column, 'LIKE', '%' . $search . '%');
            }
        });
    }
    return $query;
}

}

