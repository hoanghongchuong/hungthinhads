<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slogan;
use File;
class SloganController extends Controller
{
     public function index(){
        // $com= $request->txtCom;
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
    	$data = Slogan::where('com', $com)->get();
    	// dd($province);
    	return view('admin.slogan.index',compact('data'));
    }
    public function getCreate(){
        $data = Slogan::all();
    	return view('admin.slogan.create', compact('data'));
    }
    public function postCreate(Request $request){
        $com= $request->txtCom;
        
        $img = $request->file('fImages');
        $path_img='upload/hinhanh';
        $img_name='';
        if(!empty($img)){
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
        }
        $img2 = $request->file('fImages2');
        $img_name2='';
        if(!empty($img2)){
            $img_name2=time().'_'.$img2->getClientOriginalName();
            $img2->move($path_img,$img_name2);
        }
        
    	$slogan = new Slogan;
        $slogan->name = $request->txtName;
    	$slogan->link = $request->link;
        $slogan->photo = $img_name; 
        $slogan->photo2 = $img_name2;
        $slogan->stt = intval($request->stt);
    	$slogan->content = $request->content;
        $slogan->com = $request->txtCom;
        $slogan->icon = $request->icon;
        // dd($slogan);
    	$slogan->save();
    	return redirect('backend/slogan?type='.$com)->with('mess','Thêm thành công');
    }

    public function getEdit($id){
        // $com= $request->txtCom;
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }

    	$slogan = Slogan::where('id',$id)->first();    	
        $stt = Slogan::select('stt')->orderBy('id','asc')->get()->toArray();
    	return view('admin.slogan.edit', compact('slogan','stt'));
    }
    public function postEdit(Request $request, $id){
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
    	$slogan = Slogan::where('id',$id)->first();
        $img = $request->file('fImages');
        $img_current = 'upload/hinhanh/'.$request->img_current;
        if(!empty($img)){
            $path_img='upload/hinhanh';
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
            $slogan->photo = $img_name;
            if (File::exists($img_current)) {
                File::delete($img_current);
            }
        }

        $img2 = $request->file('fImages2');
        $img_current2 = 'upload/hinhanh/'.$request->img_current2;
        if(!empty($img2)){
            $path_img='upload/hinhanh';
            $img_name2=time().'_'.$img2->getClientOriginalName();
            $img2->move($path_img,$img_name2);
            $slogan->photo2 = $img_name2;
            if (File::exists($img_current2)) {
                File::delete($img_current2);
            }
        }
    	$slogan->name = $request->txtName;
        $slogan->link = $request->link;
    	$slogan->content = $request->content;
        $slogan->stt = intval($request->stt);
        $slogan->com = $request->txtCom;
        $slogan->icon = $request->icon;
    	$slogan->save();
    	return redirect()->back()->with('mess','Thành công');
    }

    public function delete($id){
    	$data = Slogan::find($id);
    	$data->delete();
    	return redirect()->back()->with('mess','Xóa thành công');
    }
}
