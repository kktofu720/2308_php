<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Board extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'b_id';

    protected $fillable = [
        'b_title',
        'b_content'
    ]; // 대량의 데이터를 인서트해야할 때, 수정이 가능한 것들
    
}
