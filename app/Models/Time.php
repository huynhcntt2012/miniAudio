<?php 
namespace App\Models;
  
use Illuminate\Database\Eloquent\Model;
  
class Time extends Model{
    
    const TABLE_TIME = 'time';
    
    const TIME_PRODUCTID = 'product';
    
    const TIME_STARTOFDATE = 'startofdate';
    
    const TIME_ENDOFDATE = 'endofdate';
    
    const TIME_STARTOFHOUR = 'startofhour';
    
    const TIME_ENDOFHOUR = 'endofhour';
    
    const TIME_DATEOFWEEKSTART = 'dayofweekstart';
    
    const TIME_DATEOFWEEKEND = 'dayofweekend';
    
    
    private $product = 'product';
    
    private $startofdate = 'startofdate';
    
    private $endofdate = 'endofdate';
    
    private $startofhour = 'startofhour';
    
    private $endofhour = 'endofhour';
    
    private $dayofweekstart = 'dayofweekstart';
    
    private $dayofweekend = 'dayofweekend';
    
    
    public function __construct(){
        
    }
    
    public function setProductId($product){
        $this->product = $product;
    }
    
    public function getProductId(){
        return $this->product;
    }
    
    public function setStartOfDate($startofdate){
        $this->startofdate = $startofdate;
    }
    
    public function getStartOfDate(){
        return $this->startofdate;
    }
    
    public function setEndOfDate($endofdate){
        $this->endofdate = $endofdate;
    }
    
    public function getEndOfDate(){
        return $this->endofdate;
    }
    
    public function setStartOfHour($startofhour){
        $this->startofhour = $startofhour;
    }
    
    public function getStartOfHour(){
        return $this->startofhour;
    }
    
    public function setEndOfHour($endofhour){
        $this->endofhour = $endofhour;
    }
    
    public function getEndOfHour(){
        return $this->endofhour;
    }
    
    public function setDayOfWeekStart($dayofweekstart){
        $this->dayofweekstart = $dayofweekstart;
    }
    
    public function getDayOfWeekStart(){
        return $this->dayofweekstart;
    }
    
    public function setDayOfWeekEnd($dayofweekend){
        $this->dayofweekend = $dayofweekend;
    }
    
    public function getDayOfWeekEnd(){
        return $this->dayofweekend;
    }
}
?>