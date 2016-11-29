<?php 
namespace App\Models;
  
use Illuminate\Database\Eloquent\Model;
  
class Category extends Model{
    
    const TABLE_CATEGORY = 'categary';
    
    const CATEGORY_ID = 'id';
    
    const CATEGORY_NAME = 'name';
    
    private $id = 'id';
    
    private $name = 'name';
    
    public function __construct(){
        
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setName($name){
        $this->name = $name;
    }
    
    public function getName(){
        return $this->name;
    }
}
?>