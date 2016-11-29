<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}
	public function GetData(){
		return "Chao Thinh";
	}
	public function logout(){
				
	}
	public function destroy(){
		//Session::forget('user');
		Session::forget('userId');
	}
	public function check_session(){
		if(Session::has('userId')){
			$a = array('isLogin'=>true);
			echo json_encode($a);
		}else{
			$a = array('isLogin'=>false);
			echo json_encode($a);
		}
	}
	public function createuser(Request $request){
		$flag = false;
		$username = $request->input("username");
		$password = $request->input("password");
		$address  = $request->input("address");
		$Qcount=DB::table('account')->where('account.username','=',$username)->get();
		if(count($Qcount)>0){
			$flag = true;
		}else{
			DB::table('account')->insert(
				['username' => $username,'password' => $password,'address' => $address]
			);	
		}
		
		$user = array("flag" => $flag,"user"=>$username);
		echo json_encode($user);		
	}
	public function login(Request $request){
		$username = $request->input("username");
		$password = $request->input("password");
		$data = DB::table("account")->where("account.username","=",$username)
									->where("account.password","=",$password)
									->get();
		$count = count($data);
		if($count > 0){
			$username = md5("_ang");	
			Session::push('userId',$username);
			//Session::push('user',$username);
			$user = array("flag" => true,"user"=>$username);
			echo json_encode($user);
		}else{
			$user = array("flag" => false,"user"=>$username);
			echo json_encode($user);
		}		
	}
}

