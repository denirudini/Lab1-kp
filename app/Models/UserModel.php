<?php 

namespace App\Models ;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $request;
    protected $table      = 'tb_users';
    protected $primaryKey = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $allowedFields = ['nama','no_hp','email','password'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}
?>