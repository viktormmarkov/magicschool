<?php

namespace App\Http\Controllers\Admin;

use DB;
use View;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Http\Controllers\Controller;

class AdminPageController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function index(){
    	$pages = Page::all();
    	return view('admin/adminPage')->with('pages',$pages);
    }

    public function deletePage($id){
    	$page = Page::find($id)->delete();
    	return $this->index();
    }

    public function changePageStatus($id){
    	$page = Page::find($id);
        if ($page->active == 1){
            $page->active = 0;
        }else {
            $page->active = 1;
        }
        $page->save();

        return $this->index();
    }

    public function editPage($id = ""){
    	if ($id != ""){
            $page = Page::find($id);
    		return view('admin/edit/editPage')->with('page',$page);
        }else {
            return view('admin/edit/editPage');
        }
    }

    public function savePage(Request $request){
    	$page = Page::find($request->input("id"));
        if (isset($page)){
            $page->title = $request->input("title");
            $page->name = $request->input("name"); 
            $page->description = $request->input("description");
            $page->info = $request->input("info");
            $page->save();
        }else {
            $data['title'] = $request->input('title');
            $data['name'] = $request->input('name');
            $data['description'] = $request->input('description');
            $data['info'] = $request->input('info');
            $data['active'] = 1;
            $count = Page::count();
            $data['order'] =$count++;
            
            $msg = Page::create($data);
        }

        return $this->index();
    }
}
