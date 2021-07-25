<?php 
namespace App\Models; 
use CodeIgniter\Model;

class Users extends Model { 
   protected $table = 'users'; 
   protected $primaryKey = 'id'; 
   protected $returnType = 'array'; 
   protected $allowedFields = ['name', 'email','city']; 
   protected $useTimestamps = false; 
   protected $validationRules = []; 
   protected $validationMessages = []; 
   protected $skipValidation = false; 
}