<?php 
namespace App\Models;
  
use Illuminate\Database\Eloquent\Model;
  
class Hide extends Model{
    
    const TABLE_HIDE = 'hide';
    
    const HIDE_PRODUCT = 'product';
    
    const HIDE_STATUS = 'hide';
    
    private $id = 'id';
    
    private $product = 'product';
    
    private $status = 'hide';
    
    public function __construct(){
        
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setProduct($product){
        $this->product = $product;
    }
    
    public function getProduct(){
        return $this->product;
    }
    
    public function setHide($hide){
        $this->status = $hide;
    }
    
    public function getHide(){
        return $this->status;
    }
}
?>