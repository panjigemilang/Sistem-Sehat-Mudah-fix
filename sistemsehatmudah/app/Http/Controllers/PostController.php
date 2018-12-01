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
        $thread=DB::table('thread')->get();
        return view('pages/home')->withThread($thread);
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
        //
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
    if($key != ""){
        $thread= DB::table('thread')->where('judulThread','LIKE','%' . $key . '%')
            ->get();
        if(count($thread) > 0)
            return view('pages.search')->withThread($thread)->withQuery($key);
    }
    return view('pages.search')->withMessage('Tidak Ada Thread Ditemukan')->withQuery($key);
    }
    
    public function searchDetail($idThread,$kategori){
        $key = Input::get('keyword');
        $thread = DB::table('thread')->where('idThread','LIKE','%' . $idThread . '%')->get();
        
        $terkait = DB::table('thread')->where('kategori','LIKE','%' . $kategori . '%')->where('idThread','!=',$idThread)->get();
//        $pantat = [$thread, $kategori];
        if(count($thread) > 0)
            return view('pages.search2')->withThread($thread)->withTerkait($terkait);
    }
    public function newThread(Request $request){
        $judul = Input::POST('judul');
        $kategori = Input::POST('kategori');
        $deskripsi=$request->input('deskripsi');
        $gambar = Input::POST('file');
        // $data = array('judulThread'=>$judul,'kategori'=>$kategori,'deskripsiThread'=>$deskripsi);
        // DB::table('thread')->insert($data);
        $this->validate($request, [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);    
        if  ($request->hasFile('file')) {
            $image = $request->file('file');
            $ext = $image->getClientOriginalExtension();
            $name = $image->getClientOriginalName();           
            $destinationPath = public_path("gambar");
            $image->move($destinationPath, $name);
            
            return view('pages.search')->with('alert','berhasil');
        }else{
        echo('gagal');
        } 
    }
}    