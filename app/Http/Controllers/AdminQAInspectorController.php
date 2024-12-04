<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality\Inspector\Inspector;

class AdminQAInspectorController extends Controller
{
    public function index(){
        $inspectors = Inspector::orderby('id','asc')->paginate();
        return view('admin.inspectors.index')->with(compact('inspectors'));
    }


    public function create(){
        return view('admin.inspectors.add');
    }


    public function store(Request $request){
        $this->validate($request,[
            'name'=> 'required',
            'gender'=> 'required',
            'contact'=> 'required',
        ]);
        $filename = NULL;
        if(request()->hasFile('profile')){
            $file = request()->file('profile');
            $filename = md5($file->getClientOriginalName()).time().'.'.$file->getClientOriginalExtension();
            $file->move('./uploads',$filename);
        }
        else{
            $filename = 'Image will be here';
        }
        Inspector::create([
            'name' => $request->get('name'),
            'gender' => $request->get('gender'),
            'contact' => $request->get('contact'),
            'profile' => $filename,
        ]);
        return redirect()->to('admin/inspectors');

    }


    public function show(string $id){

    }

    public function edit(string $id){
        $inspector = Inspector::find($id);
        return view('admin.inspectors.edit')->with(compact('inspector'));
    }


    public function update(Request $request, string $id){
        $this->validate($request,[
            'name'=> 'required',
            'gender'=> 'required',
            'contact'=> 'required',
      ]);

        $inspector = Inspector::find($id);

        $filename = NULL;
        if(request()->hasFile('profile')){
            $file = request()->file('profile');
            $filename = md5($file->getClientOriginalName()).time().'.'.$file->getClientOriginalExtension();
            $file->move('./uploads',$filename);
        }
        else{
            $filename = $inspector->profile;
        }
        $inspector->update([
            'name' => $request->get('name'),
            'gender' => $request->get('gender'),
            'contact' => $request->get('contact'),
            'profile' => $filename,
        ]);
        return redirect()->to('admin/inspectors');

    }


    public function destroy(string $id){
        $inspector = Inspector::find($id);
        $inspector->delete();
        return redirect()->to('admin/inspectors');
    }

}
