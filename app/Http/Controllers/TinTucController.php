<?php

namespace App\Http\Controllers;

use App\Http\Requests\TinTucRequest;
use Illuminate\Http\Request;
use App\TinTuc;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class TinTucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tintucs = TinTuc::orderBy('id', 'DESC')->paginate(5);
        return view('backend.admin.tintuc.tintuc', compact('tintucs'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.tintuc.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TinTucRequest $request)
    {
        $tintuc=new TinTuc();
        $path=$request->input('tieude');
        $path= vn_str_filter($path);//Chuyen tat ca tu co dau thanh ko dau
        $path=preg_replace('/\s+/', ' ',$path);//Xoa khoang trang thua, tra lai 1 khoang trang
        $path=str_replace(' ','-',$path);
        $ran = round(microtime(true) * 1000);
        $path=$path.'-'.$ran;
        $tintuc->path=$path;
        $tintuc->tieude=$request->input('tieude');
        $tintuc->motangan=$request->input('motangan');
        $tintuc->noidung=$request->input('noidung');
        $file = Input::file('hinhchude');
        $directory="images/news/";/////////////////////Be carefull không có public
        $ran = round(microtime(true) * 1000);
        $filename = $file->getClientOriginalName();
        $filename = str_replace('.' . $file->getClientOriginalExtension(), '', $filename);
        $filename=str_replace(' ', '-', $filename);
        $filename = preg_replace('/[^A-Za-z0-9\-]/', '', $filename);
        $filename=preg_replace('/-+/', '',$filename);
        if(strlen($filename)>15){
            $filename=substr($filename,0,15);
        }
        $filename = $filename . '_' . $ran . '.' . $file->getClientOriginalExtension();
        $file->move($directory,$filename);
        $tintuc->anhtieubieu=$filename;
        $tintuc->user_id = Auth::user()->id;
        $tintuc->save();
        return redirect()->route('tintucs.index')
            ->with('success','Tin Tức store successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tintuc = TinTuc::find($id);
        return view('backend.admin.tintuc.edit',compact('tintuc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(TinTucRequest $request, $id)
    {
        $tintuc = TinTuc::find($id);
        $path=$request->input('tieude');
        $path= vn_str_filter($path);//Chuyen tat ca tu co dau thanh ko dau
        $path=preg_replace('/\s+/', ' ',$path);//Xoa khoang trang thua, tra lai 1 khoang trang
        $path=str_replace(' ','-',$path);
        $ran = round(microtime(true) * 1000);
        $path=$path.'-'.$ran;
        $tintuc->path=$path;
        $tintuc->tieude=$request->input('tieude');
        $tintuc->motangan=$request->input('motangan');
        $tintuc->noidung=$request->input('noidung');
        $file = Input::file('hinhchude');
        if($file){
            $ran = round(microtime(true) * 1000);
            $filename = $file->getClientOriginalName();
            $filename = str_replace('.' . $file->getClientOriginalExtension(), '', $filename);
            $filename=str_replace(' ', '-', $filename);
            $filename = preg_replace('/[^A-Za-z0-9\-]/', '', $filename);
            $filename=preg_replace('/-+/', '',$filename);
            if(strlen($filename)>15){
                $filename=substr($filename,0,15);
            }
            $filename = $filename . '_' . $ran . '.' . $file->getClientOriginalExtension();
            $directory="images/news/";
            $file->move($directory,$filename);
            $tintuc->anhtieubieu=$filename;
        }
        $tintuc->save();
        return redirect()->route('tintucs.index')
            ->with('success','Tin Tức updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uploadImage()
    {
        $file = Input::file('file');
        $extension = File::extension($file->getClientOriginalName());
        $directory = 'public/images/';
        $filename = sha1(time() . time()) . ".{$extension}";
        $upload_success = $file->move($directory, $filename);

        if ($upload_success) {
            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }
    }
}
