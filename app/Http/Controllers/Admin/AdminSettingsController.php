<?php

namespace App\Http\Controllers\Admin;

use DB;
use View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Settings;
use Illuminate\Support\Facades\Redirect;

class AdminSettingsController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function index(){
        $settings = Settings::all();
    	return view('admin/adminSettings')->with('settings',$settings);
    }

    public function editSettings($id){
        $setting = Settings::find($id);
        return view('admin/edit/editSettings')->with('settings',$setting);
    }

    public function saveSettings(Request $request){

        if($request->input('type') == '0'){
            $logo = $request->file('value');
            $upload = 'uploads/settings/';
            $filename = $logo->getClientOriginalName();
            $success = $logo->move($upload,$filename);

            $data = Settings::find($request->input("id"));
            $data->value = $upload . $filename;
        }else {
            $data = Settings::find($request->input("id"));
            $data->value = $request->input('value');           
        }
        $data->save();
        return $this->index();
    }


    /*public function upload_image(Request $data){
        $validation = Validator::make($data->all(),array(
            'image' => 'required|mimes:jpg,jpeg,png|Max:1000',
            ));
        if($validation->fails()){
            return;
        }else{
            $logo = $data->file('image');
            $upload = 'uploads/settings';
            $filename = $logo->getClientOriginalName();
            $success = $logo->move($upload,$filename);

            if ($success){

                $table = new 'TABLENAME';
                $table->image = $filename;
                $table->save();
                return;
            }
        }
    
    }*/
}
