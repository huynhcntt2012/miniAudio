<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Sub;



class CategoryController extends Controller {
    
    public function CreateCate(Request $request){
        
        if ($request->input(Category::CATEGORY_NAME) == "") {
            
            return $this->resultApi(array(),"false","deficient parameter user ".Category::CATEGORY_NAME);
            
        }
        
        $nameCate = $request->input(Category::CATEGORY_NAME);
        
        DB::table(Category::TABLE_CATEGORY)->insert(array(Category::CATEGORY_NAME => $nameCate));
        
        $list = DB::table(Category::TABLE_CATEGORY)->select()
									->get();
        
        return json_encode($list);
    }
    
    
    public function EditCate(Request $request){
        
        if ($request->input(Category::CATEGORY_ID) == "") {
            
            return $this->resultApi(array(),"false","deficient parameter user ".Category::CATEGORY_ID);
            
        }
        
        if ($request->input(Category::CATEGORY_NAME) == "") {
            
            return $this->resultApi(array(),"false","deficient parameter user ".Category::CATEGORY_NAME);
            
        }
        
        $idCate = $request->input(Category::CATEGORY_ID);
        $nameCate = $request->input(Category::CATEGORY_NAME);
        
        
        DB::table(Category::TABLE_CATEGORY)->where(Category::CATEGORY_ID,"=",$idCate)->update(array(Category::CATEGORY_NAME => $nameCate));
        
        $list = DB::table(Category::TABLE_CATEGORY)->select()
									->get();
        
        return json_encode($list);
    }
    
    public function DeleteCate(Request $request){
        
        if ($request->input(Category::CATEGORY_ID) == "") {
            
            return $this->resultApi(array(),"false","deficient parameter user ".Category::CATEGORY_ID);
            
        }
        
        $idCate = $request->input(Category::CATEGORY_ID);
        
        
        DB::table(Category::TABLE_CATEGORY)->where(Category::CATEGORY_ID,"=",$idCate)->delete();
        
        $list = DB::table(Category::TABLE_CATEGORY)->select()
									->get();
        
        return json_encode($list);
    }
    
    public function LoadCate(){
        
        $list = DB::table(Category::TABLE_CATEGORY)->select()
									->get();
        
        return json_encode($list);
    }
    
    
    
    
    
}