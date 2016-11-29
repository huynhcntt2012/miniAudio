<?php 
namespace App\Models;
  
use Illuminate\Database\Eloquent\Model;
  
class Sub extends Model{
    
    const TABLE_SUB = 'sub';
    
    const SUB_ID = 'id';
    
    const SUB_NAME = 'name';
    
    const SUB_CATE = 'cate';
    
    private $id = 'id';
    
    private $name = 'name';
    
    private $cate = 'cate';
    
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
    
    public function setCate($cate){
        $this->cate = $cate;
    }
    
    public function getCate(){
        return $this->cate;
    }
}
?>