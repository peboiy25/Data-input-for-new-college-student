<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primarykey = 'NIM';
    protected $allowedFields = ['nim','nama','program_studi','konsentrasi'];
}
?>