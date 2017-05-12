<?php

namespace App\Http\Controllers\Admin;

use DB;
use View;
use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Controllers\Controller;

class AdminNewsController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function index(){
    	$news = News::all();
    	return view('admin/adminNews')->with('news',$news);
    }

    public function deleteNews($id){
    	$news = News::find($id)->delete();
    	return $this->index();
    }

    public function editNews($id = ""){
    	if ($id != ""){
            $news = News::find($id);
    		return view('admin/edit/editNews')->with('news',$news);
        }else {
            return view('admin/edit/editNews');
        }
    }

    public function saveNews(Request $request){
    	$news = News::find($request->input("id"));
        $image = $request->file('image');
        
        $upload = 'news/';

        if (isset($image)){
            $filename = $image->getClientOriginalName();
            $success = $image->move($upload,$filename);

        }

        
        $searchid = isset($id) ? $id : $request->input('id');

        $dataImage = isset($filename) ? $upload.$filename : '';


        if (isset($news)){
            $news->title = $request->input("title");
            $news->meta_title = $request->input("meta_title");
            $news->meta_description = $request->input("meta_description");
            $news->short_description = $request->input("short_description");
            $news->info = $request->input("info");
            if($dataImage) {
                if(file_exists($news->image)) unlink($news->image);
                $news->image = $dataImage;
            }
            $news->save();
        }else {
            $data['title'] = $request->input('title');
            $data['info'] = $request->input('info');
            $data['meta_title'] = $request->input('meta_title');
            $data['meta_description'] = $request->input('meta_description');
            $data['short_description'] = $request->input('short_description');
            $data['image'] = $dataImage;
            $data['active'] = 1;
            News::create($data);
        }
        return $this->index();
    }

    public function changeNewsStatus($id){
    	$news = News::find($id);
        if ($news->active == 1){
            $news->active = 0;
        }else {
            $news->active = 1;
        }
        $news->save();

        return $this->index();
    }

}
