<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Diary extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
    ];

    protected $table = 'diaries';

    public function getData() {
        $data = Diary::orderBy('created_at', 'desc')->simplePaginate(5);
        return $data;
    }
}
