<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // 主キー名を変更するので明記する
    protected $primaryKey = 'book_id';

    protected $fillable = [
        'title',
        'author',
        'publisher',
        'ISBN',
        'summary',
        'genre',
        'available'
    ];
}
