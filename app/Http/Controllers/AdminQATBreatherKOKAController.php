<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality\Final\TubeBreatherKOKA;

class AdminQATBreatherKOKAController extends Controller
{
    public function index(){
        $tubes = TubeBreatherKOKA::orderBy('sr_no','DESC')->paginate(8);
        return view('admin.final.tBreatherKOKA.index')->with(compact('tubes'));
    }
    public function create(){
        return view('admin.final.tBreatherKOKA.add');
    }
    public function store(Request $request){

        $date = $request->input('date');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

        $monthNumberAsString = strval($monthNumber);

        $dayOfMonth = date('j', strtotime($date));


        $total = 0;
        if($request->get('extr_btm_lyr') != 'Approved'){
            $total++;
        }
        if($request->get('extr_top_lyr') != 'Approved'){
            $total++;
        }
        if($request->get('blnk_ctng_tlyr') != 'Approved'){
            $total++;
        }
        if($request->get('vulcan_tlyr') != 'Approved'){
            $total++;
        }
        if($request->get('washing') != 'Approved'){
            $total++;
        }
        if($request->get('fnl_ctng_tlyr') != 'Approved'){
            $total++;
        }

        if($request->get('date_code_prnt') != 'Approved'){
            $total++;
        }



        $this->validate(request(),[
            'date'=> 'required',
            'extr_btm_lyr'=>'required|not_in:none',
            'extr_top_lyr'=>'required|not_in:none',
            'blnk_ctng_tlyr'=>'required|not_in:none',
            'vulcan_tlyr'=>'required|not_in:none',
            'washing'=>'required|not_in:none',
            'fnl_ctng_tlyr'=>'required|not_in:none',
            'date_code_prnt'=>'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        TubeBreatherKOKA::create([
            'date' => $request->get('date'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'day' => $dayOfMonth,
            'extr_btm_lyr' =>$request->get('extr_btm_lyr'),
            'extr_top_lyr' =>$request->get('extr_top_lyr'),
            'blnk_ctng_tlyr' =>$request->get('blnk_ctng_tlyr'),
            'vulcan_tlyr' =>$request->get('vulcan_tlyr'),
            'washing' =>$request->get('washing'),
            'fnl_ctng_tlyr' =>$request->get('fnl_ctng_tlyr'),
            'date_code_prnt' =>$request->get('date_code_prnt'),
            'prod' =>$request->get('prod'),
            'total' => $total

        ]);
        return redirect()->to('/admin/product/tBreatherKOKA');

    }

    public function edit(string $id){

        $tube = TubeBreatherKOKA::find($id);
        return view('admin.final.tBreatherKOKA.edit')->with(compact('tube'));

    }

    public function update(Request $request ,string $id){

        $date = $request->input('date');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

        $monthNumberAsString = strval($monthNumber);

        $dayOfMonth = date('j', strtotime($date));



        $total = 0;
        if($request->get('extr_btm_lyr') != 'Approved'){
            $total++;
        }
        if($request->get('extr_top_lyr') != 'Approved'){
            $total++;
        }
        if($request->get('blnk_ctng_tlyr') != 'Approved'){
            $total++;
        }
        if($request->get('vulcan_tlyr') != 'Approved'){
            $total++;
        }
        if($request->get('washing') != 'Approved'){
            $total++;
        }
        if($request->get('fnl_ctng_tlyr') != 'Approved'){
            $total++;
        }

        if($request->get('date_code_prnt') != 'Approved'){
            $total++;
        }



        $this->validate(request(),[
            'date'=> 'required',
            'extr_btm_lyr'=>'required|not_in:none',
            'extr_top_lyr'=>'required|not_in:none',
            'blnk_ctng_tlyr'=>'required|not_in:none',
            'vulcan_tlyr'=>'required|not_in:none',
            'washing'=>'required|not_in:none',
            'fnl_ctng_tlyr'=>'required|not_in:none',
            'date_code_prnt'=>'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        $tube = TubeBreatherKOKA::find($id);
        $tube->update([
            'date' => $request->get('date'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'day' => $dayOfMonth,
            'extr_btm_lyr' =>$request->get('extr_btm_lyr'),
            'extr_top_lyr' =>$request->get('extr_top_lyr'),
            'blnk_ctng_tlyr' =>$request->get('blnk_ctng_tlyr'),
            'vulcan_tlyr' =>$request->get('vulcan_tlyr'),
            'washing' =>$request->get('washing'),
            'fnl_ctng_tlyr' =>$request->get('fnl_ctng_tlyr'),
            'date_code_prnt' =>$request->get('date_code_prnt'),
            'prod' =>$request->get('prod'),
            'total' => $total

        ]);
        return redirect()->to('/admin/product/tBreatherKOKA');

    }


    public function destroy(string $id){
        $tube = TubeBreatherKOKA::find($id);
        $tube->delete();
        return redirect()->to('/admin/product/tBreatherKOKA');
    }
}
