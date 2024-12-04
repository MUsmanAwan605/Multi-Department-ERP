<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality\Final\TubeBtryBreatherKSW;

class AdminQATBtryBreatherKSWController extends Controller
{
    public function index(){
        $tubes = TubeBtryBreatherKSW::orderBy('sr_no','DESC')->paginate(8);
        return view('admin.final.tBatteryBreatherKSW.index')->with(compact('tubes'));
    }
    public function create(){
        return view('admin.final.tBatteryBreatherKSW.add');
    }
    public function store(Request $request){

        $date = $request->input('date');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

        $monthNumberAsString = strval($monthNumber);

        $dayOfMonth = date('j', strtotime($date));


        $total = 0;
        if($request->get('extr_sngl_lyr') != 'Approved'){
            $total++;
        }
        if($request->get('semi_vulcan') != 'Approved'){
            $total++;
        }
        if($request->get('fnl_ctng_t') != 'Approved'){
            $total++;
        }
        if($request->get('cmplt_vulcan') != 'Approved'){
            $total++;
        }
        if($request->get('wshng_t') != 'Approved'){
            $total++;
        }
        if($request->get('punching') != 'Approved'){
            $total++;
        }
        if($request->get('mldng_grmt') != 'Approved'){
            $total++;
        }
        if($request->get('trmng_grmt') != 'Approved'){
            $total++;
        }
        if($request->get('asmbl_grmt') != 'Approved'){
            $total++;
        }


        $this->validate(request(),[
           'date'=> 'required',
            'extr_sngl_lyr'=>'required|not_in:none',
            'semi_vulcan'=>'required|not_in:none',
            'fnl_ctng_t'=>'required|not_in:none',
            'cmplt_vulcan'=>'required|not_in:none',
            'wshng_t'=>'required|not_in:none',
            'punching'=>'required|not_in:none',
            'mldng_grmt'=>'required|not_in:none',
            'trmng_grmt'=>'required|not_in:none',
            'asmbl_grmt'=>'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        TubeBtryBreatherKSW::create([
            'date' => $request->get('date'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'day' => $dayOfMonth,
            'extr_sngl_lyr' =>$request->get('extr_sngl_lyr'),
            'semi_vulcan' =>$request->get('semi_vulcan'),
            'fnl_ctng_t' =>$request->get('fnl_ctng_t'),
            'cmplt_vulcan' =>$request->get('cmplt_vulcan'),
            'wshng_t' =>$request->get('wshng_t'),
            'punching' =>$request->get('punching'),
            'asmbl_grmt' =>$request->get('asmbl_grmt'),
            'mldng_grmt' =>$request->get('mldng_grmt'),
            'trmng_grmt' =>$request->get('trmng_grmt'),
            'prod' =>$request->get('prod'),
            'total' => $total

        ]);
        return redirect()->to('/admin/product/tBtryBreatherKSW');

    }

    public function edit(string $id){

        $tube = TubeBtryBreatherKSW::find($id);
        return view('admin.final.tBatteryBreatherKSW.edit')->with(compact('tube'));

    }

    public function update(Request $request ,string $id){

        $date = $request->input('date');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

        $monthNumberAsString = strval($monthNumber);

        $dayOfMonth = date('j', strtotime($date));



        $total = 0;
        if($request->get('extr_sngl_lyr') != 'Approved'){
            $total++;
        }
        if($request->get('semi_vulcan') != 'Approved'){
            $total++;
        }
        if($request->get('fnl_ctng_t') != 'Approved'){
            $total++;
        }
        if($request->get('cmplt_vulcan') != 'Approved'){
            $total++;
        }
        if($request->get('wshng_t') != 'Approved'){
            $total++;
        }
        if($request->get('punching') != 'Approved'){
            $total++;
        }
        if($request->get('mldng_grmt') != 'Approved'){
            $total++;
        }
        if($request->get('trmng_grmt') != 'Approved'){
            $total++;
        }
        if($request->get('asmbl_grmt') != 'Approved'){
            $total++;
        }


        $this->validate(request(),[
           'date'=> 'required',
            'extr_sngl_lyr'=>'required|not_in:none',
            'semi_vulcan'=>'required|not_in:none',
            'fnl_ctng_t'=>'required|not_in:none',
            'cmplt_vulcan'=>'required|not_in:none',
            'wshng_t'=>'required|not_in:none',
            'punching'=>'required|not_in:none',
            'mldng_grmt'=>'required|not_in:none',
            'trmng_grmt'=>'required|not_in:none',
            'asmbl_grmt'=>'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        $tube = TubeBtryBreatherKSW::find($id);
        $tube->update([
            'date' => $request->get('date'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'day' => $dayOfMonth,
            'extr_sngl_lyr' =>$request->get('extr_sngl_lyr'),
            'semi_vulcan' =>$request->get('semi_vulcan'),
            'fnl_ctng_t' =>$request->get('fnl_ctng_t'),
            'cmplt_vulcan' =>$request->get('cmplt_vulcan'),
            'wshng_t' =>$request->get('wshng_t'),
            'punching' =>$request->get('punching'),
            'asmbl_grmt' =>$request->get('asmbl_grmt'),
            'mldng_grmt' =>$request->get('mldng_grmt'),
            'trmng_grmt' =>$request->get('trmng_grmt'),
            'prod' =>$request->get('prod'),
            'total' => $total


        ]);
        return redirect()->to('/admin/product/tBtryBreatherKSW');

    }


    public function destroy(string $id){
        $tube = TubeBtryBreatherKSW::find($id);
        $tube->delete();
        return redirect()->to('/admin/product/tBtryBreatherKSW');
    }
}
