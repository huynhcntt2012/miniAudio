<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Sub;
use App\Models\Time;
use App\Models\Hide;



class TimeController extends Controller {
    
    public function CreateTime(Request $request){
        
        if ($request->input(Time::TIME_PRODUCTID) == "") {
            
            return $this->resultApi(array(),"false","deficient parameter user ".Time::TIME_PRODUCTID);
        }
        
        if ($request->input(Time::TIME_ENDOFDATE) == "") {
            
            $startofdate = null;
        }
        else{
            $startofdate = $request->input(Time::TIME_STARTOFDATE);
        }
        
        if ($request->input(Time::TIME_ENDOFDATE) == "") {
            
            $endofdate = null;
        }
        else{
            $endofdate = $request->input(Time::TIME_ENDOFDATE);
        }
        
        if ($request->input(Time::TIME_STARTOFHOUR) == "") {
            
            $startofhour = null;
        }
        else{
            $startofhour = $request->input(Time::TIME_STARTOFHOUR);
        }
        
        if ($request->input(Time::TIME_ENDOFHOUR) == "") {
            
            $endofhour = null;
        }
        else{
            $endofhour = $request->input(Time::TIME_ENDOFHOUR);
        }
        
        if ($request->input(Time::TIME_DATEOFWEEKSTART) == "") {
            
            $dateofweekstart = null;
        }
        else{
            $dateofweekstart = $request->input(Time::TIME_DATEOFWEEKSTART);
        }
        
        if ($request->input(Time::TIME_DATEOFWEEKEND) == "") {
            
            $dateofweekend = null;
        }
        else{
            $dateofweekend = $request->input(Time::TIME_DATEOFWEEKEND);
        }
        
        
        $array = array(
                        Time::TIME_PRODUCTID => $request->input(Time::TIME_PRODUCTID),
                        Time::TIME_STARTOFDATE => $startofdate,
                        Time::TIME_ENDOFDATE => $endofdate,
                        Time::TIME_STARTOFHOUR => $startofhour,
                        Time::TIME_ENDOFHOUR => $endofhour,
                        Time::TIME_DATEOFWEEKSTART => $dateofweekstart,
                        Time::TIME_DATEOFWEEKEND => $dateofweekend
                        
                    );
        
        DB::table(Time::TABLE_TIME)->insert($array);
        
        $list = DB::table(Time::TABLE_TIME)->select()
									->get();
        
        return json_encode($list);
    }
    
    
    public function EditTime(Request $request){
        
        if ($request->input(Time::TIME_PRODUCTID) == "") {
            
            return $this->resultApi(array(),"false","deficient parameter user ".Time::TIME_PRODUCTID);
        }
        
        if ($request->input(Time::TIME_ENDOFDATE) == "") {
            
            $startofdate = null;
        }
        else{
            $startofdate = $request->input(Time::TIME_STARTOFDATE);
        }
        
        if ($request->input(Time::TIME_ENDOFDATE) == "") {
            
            $endofdate = null;
        }
        else{
            $endofdate = $request->input(Time::TIME_ENDOFDATE);
        }
        
        if ($request->input(Time::TIME_STARTOFHOUR) == "") {
            
            $startofhour = null;
        }
        else{
            $startofhour = $request->input(Time::TIME_STARTOFHOUR);
        }
        
        if ($request->input(Time::TIME_ENDOFHOUR) == "") {
            
            $endofhour = null;
        }
        else{
            $endofhour = $request->input(Time::TIME_ENDOFHOUR);
        }
        
        if ($request->input(Time::TIME_DATEOFWEEKSTART) == "") {
            
            $dateofweekstart = null;
        }
        else{
            $dateofweekstart = $request->input(Time::TIME_DATEOFWEEKSTART);
        }
        
        if ($request->input(Time::TIME_DATEOFWEEKEND) == "") {
            
            $dateofweekend = null;
        }
        else{
            $dateofweekend = $request->input(Time::TIME_DATEOFWEEKEND);
        }
        
        $product = $request->input(Time::TIME_PRODUCTID);
        $array = array(
                        Time::TIME_STARTOFDATE => $startofdate,
                        Time::TIME_ENDOFDATE => $endofdate,
                        Time::TIME_STARTOFHOUR => $startofhour,
                        Time::TIME_ENDOFHOUR => $endofhour,
                        Time::TIME_DATEOFWEEKSTART => $dateofweekstart,
                        Time::TIME_DATEOFWEEKEND => $dateofweekend
                        
                    );
        
        DB::table(Time::TABLE_TIME)->where(Time::TIME_PRODUCTID,"=",$product)->update($array);
        
        $list = DB::table(Time::TABLE_TIME)->select()
									->get();
        
        return json_encode($list);
    }
    
    public function DeleteTime(Request $request){
        
        if ($request->input(Time::TIME_PRODUCTID) == "") {
            
            return $this->resultApi(array(),"false","deficient parameter user ".Time::TIME_PRODUCTID);
        }
        
        $product = $request->input(Time::TIME_PRODUCTID);
        
        
        DB::table(Time::TABLE_TIME)->where(Time::TIME_PRODUCTID,"=",$product)->delete();
        
        $list = DB::table(Time::TABLE_TIME)->select()
									->get();
        
        return json_encode($list);
    }
    
    public function LoadTime(){
        
        $list = DB::table(Sub::TABLE_SUB)->select()
									->get();
        
        return json_encode($list);
    }
    
    
}