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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
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
    } return view('pages.search')->withThread($thread)->withQuery($key);
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

	    $username = "admin";
	    $password = "pw123";

	    $error = "";

	    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
	        $error = "success";
	        return view('pages/home');
	    } 
	        
	    if (isset($_POST['username']) && isset($_POST['password'])) {
	        if ($_POST['username'] == $username && $_POST['password'] == $password) {
	            $_SESSION['loggedIn'] = true;
	            return view('pages/home');
	        } 
	        else {
	            $_SESSION['loggedIn'] = false;
	            $error = "Invalid username and password!";
	            return view('pages/hallogin');
	        }
	    }
    }
}
