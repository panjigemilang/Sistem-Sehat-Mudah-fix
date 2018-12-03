<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Input; 
use App\thread; 
use App\Post; 
use DB; 

class PostController extends Controller 
{ 
/** 
* Display a listing of the resource. 
* 
* @return \Illuminate\Http\Response 
*/ 
public function index() 
{ 
// 

$thread = DB::table('thread')->get(); 
$fthread = DB::table('thread')->inRandomOrder()->take(1)->get(); 
return view('pages/home')->with('thread', $thread)->with('fthread', $fthread); 
// return "halo kocak"; 
} 
/** 
* Show the form for creating a new resource. 
* 
* @return \Illuminate\Http\Response 
*/ 
public function create() 
{ 
// 
} 
/** 
* Store a newly created resource in storage. 
* 
* @param \Illuminate\Http\Request $request 
* @return \Illuminate\Http\Response 
*/ 
public function store(Request $request) 
{ 
// 
} 
/** 
* Display the specified resource. 
* 
* @param int $id 
* @return \Illuminate\Http\Response 
*/ 
public function show($id) 
{ 
$db = DB::table('thread')->where('kategori', 'LIKE', $id)->get(); 
return view('pages/profile')->with('profile', $db); 
} 
/** 
* Show the form for editing the specified resource. 
* 
* @param int $id 
* @return \Illuminate\Http\Response 
*/ 
public function edit($id) 
{ 
// 
} 
/** 
* Update the specified resource in storage. 
* 
* @param \Illuminate\Http\Request $request 
* @param int $id 
* @return \Illuminate\Http\Response 
*/ 
public function update(Request $request, $id) 
{ 
// 
} 
/** 
* Remove the specified resource from storage. 
* 
* @param int $id 
* @return \Illuminate\Http\Response 
*/ 
public function destroy($id) 
{ 
// 
} 

public function search() 
{ 
$key = Input::get('keyword'); 
if(Input::get('compare') != null){ 
if($key != ""){ 
$thread= DB::table('thread')->where('judulThread','LIKE','%' . $key . '%') 
->get(); 
} else { 
return view('pages.search')->withMessage('Tidak Ada Thread Ditemukan')->withQuery($key); 
} 
} else { 
$thread= DB::table('thread')->where('kategori','LIKE','%' . $key . '%') 
->get(); 
}return view('pages.search')->withThread($thread)->withQuery($key); 
} 
public function searchDetail($idThread, $kategori){ 
$key = Input::get('keyword'); 
$thread = DB::table('thread')->where('idThread','LIKE','%' . $idThread . '%')->get(); 
$terkait = DB::table('thread')->where('kategori','LIKE','%' . $kategori . '%')->where('idThread','!=',$idThread)->get(); 

if(count($thread) > 0) 
return view('pages.search2')->withThread($thread)->withTerkait($terkait); 
} 

public function sistemlogin(){ 
session_start(); 

$name = Input::post('username');
$pass = Input::post('password');  

$username = DB::table('users')->select('name')->get(); 
$password = DB::table('users')->select('password')->get();

if($name=$username && $pass=$password){
    return view('pages/home')->withMSg("Berhasil");
}else{
    return view('pages/hallogin')->withMSg("gagal");
}
}
// $error = ""; 

// if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) { 
// $error = "success"; 
// return view('pages/home'); 
// } 

// if (isset($_POST['username']) && isset($_POST['password'])) { 
// if ($_POST['username'] == $username && $_POST['password'] == $password) { 
// $_SESSION['loggedIn'] = true; 
// return view('pages/home'); 
// } 
// else { 
// $_SESSION['loggedIn'] = false; 
// $error = "Invalid username and password!"; 
// return view('pages/hallogin'); 
// } 
// } 
// }
    public function newThread(Request $request){
        $judul = Input::POST('judul');
        $kategori = Input::POST('kategori');
        $deskripsi=$request->input('deskripsi');
        $gambar = Input::POST('file');
        $data = array('judulThread'=>$judul,'kategori'=>$kategori,'deskripsiThread'=>$deskripsi);
        DB::table('thread')->insert($data);
        $this->validate($request, [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);    
        if  ($request->hasFile('file')) {
            $thread = DB::table('thread')->get(); 
            $fthread = DB::table('thread')->inRandomOrder()->take(1)->get();  
            $image = $request->file('file');
            $ext = $image->getClientOriginalExtension();
            $name = $image->getClientOriginalName();           
            $destinationPath = public_path("gambar");
            $image->move($destinationPath, $name);
            $alert = "Data Dimasukan Ke Database";
            return view('pages/home')->with('thread', $thread)->with('fthread', $fthread)->withMsg("Data Dimasukan Kedalam Database!!");
        }
    }

    public function bmi(Request $request){
        $thread = DB::table('thread')->get(); 
        $fthread = DB::table('thread')->inRandomOrder()->take(1)->get();  
        $berat = Input::POST('berat');
        $tinggi = Input::POST('tinggi');
        $bmi=$berat/($tinggi*$tinggi);
        if($bmi<18.5){
            $alert="BMI anda KURANG";
        }else if($bmi>18.5 && $bmi<25){
            $alert="BMI anda IDEAL";
        }else{
            $alert="BMI anda KELEBIHAN";
        }
        return view('pages/home')->with('thread', $thread)->with('fthread', $fthread)->withMsg($alert);
    }
}