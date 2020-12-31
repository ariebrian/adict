<?php namespace App\Models;

use CodeIgniter\Model;

class Data extends Model
{
    protected $table      = 'tbldata';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
}