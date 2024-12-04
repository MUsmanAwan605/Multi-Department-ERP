<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality\Summary\Summary;
use App\Models\Quality\Final\CshnFrntFuelTnkDLX;
use App\Models\Quality\Final\GrmtARearCvrCD100;
use App\Models\Quality\Final\GrmtCD70;
use App\Models\Quality\Final\GrmtCG125;
use App\Models\Quality\Final\GrmtSideCvrDLX;
use App\Models\Quality\Final\PckngRbrCD100;
use App\Models\Quality\Final\RbrHndlCshnCD100;
use App\Models\Quality\Final\RbrMflrMntDLX;
use App\Models\Quality\Final\Tube4X440KOKA;
use App\Models\Quality\Final\Tube8X150CG125;
use App\Models\Quality\Final\TubeABreatherCG125;
use App\Models\Quality\Final\TubeASVCntrlCG125;
use App\Models\Quality\Final\TubeBBreatherCD70;
use App\Models\Quality\Final\TubeBBreatherCG125;
use App\Models\Quality\Final\TubeBreatherDLX;
use App\Models\Quality\Final\TubeBreatherKOKA;
use App\Models\Quality\Final\TubeBreatherPridor;
use App\Models\Quality\Final\TubeBtryBreatherCD100;
use App\Models\Quality\Final\TubeBtryBreatherCD70;
use App\Models\Quality\Final\TubeBtryBreatherCG125;
use App\Models\Quality\Final\TubeBtryBreatherDLX;
use App\Models\Quality\Final\TubeBtryBreatherKOKA;
use App\Models\Quality\Final\TubeFuelCD100;
use App\Models\Quality\Final\TubeFuelCD70;
use App\Models\Quality\Final\TubeCompFuelKOKA;
use App\Models\Quality\Final\TubeCompFuelDLX;
use App\Models\Quality\Final\TubeSuctionCG125;
use App\Models\Quality\Final\TubeSuctionKOKA;
use App\Models\Quality\Final\TubeFuelCG125;
use App\Models\Quality\Final\UndrRbrHndlCD100;
use App\Models\Quality\Final\TubeBtryBreatherKSW;
use App\Models\Quality\Inspector\TotalInspection;

class QASummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $summaries = Summary::orderBy('sr_no','DESC')->paginate(5);
        $table = Summary::get();
        $finalRejections = collect($table)->sum('fnl_inspct_rjct');
        return view('quality.summary.index')->with(compact('summaries','finalRejections'));
    }

    /**
     * Show the form for creating a new resource.
     */


    public function create()
    {
        return view('quality.summary.add');

    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {


        $totalInspection = TotalInspection::get();


        if($request->get('part_name') == 'Tube Fuel CG-125'){
            $finalRejections = TubeFuelCG125::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Fuel CG-125') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Battery Breather Deluxe'){
            $finalRejections = TubeBtryBreatherDLX::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Battery Breather Deluxe') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Cushion Front Fuel Tank Deluxe'){
            $finalRejections = CshnFrntFuelTnkDLX::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Cushion Front Fuel Tank Deluxe') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Grommet A Rear Cover CD-100'){
            $finalRejections = GrmtARearCvrCD100::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Grommet A Rear Cover CD-100') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Grommet CD-70'){
            $finalRejections = GrmtCD70::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Grommet CD-70') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Grommet CG-125'){
            $finalRejections = GrmtCG125::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Grommet CG-125') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Grommet Side Cover Deluxe'){
            $finalRejections = GrmtSideCvrDLX::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Grommet Side Cover Deluxe') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Packing Rubber CD-100'){
            $finalRejections = PckngRbrCD100::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Packing Rubber CD-100') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Rubber Handle Cushion CD-100'){
            $finalRejections = RbrHndlCshnCD100::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Rubber Handle Cushion CD-100') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Rubber Muffler Mount Deluxe'){
            $finalRejections = RbrMflrMntDLX::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Rubber Muffler Mount Deluxe') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube 4 X 440 KOKA'){
            $finalRejections = Tube4X440KOKA::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube 4 X 440 KOKA') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube 8 X 150 CG-125'){
            $finalRejections = Tube8X150CG125::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube 8 X 150 CG-125') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube A Breather CG-125'){
            $finalRejections = TubeABreatherCG125::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube A Breather CG-125') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube ASV CG-125'){
            $finalRejections = TubeASVCntrlCG125::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube ASV CG-125') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube B Breather CD-70'){
            $finalRejections = TubeBBreatherCD70::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube B Breather CD-70') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube B Breather CG-125'){
            $finalRejections = TubeBBreatherCG125::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube B Breather CG-125') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Breather Deluxe'){
            $finalRejections = TubeBreatherDLX::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Breather Deluxe') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Breather KOKA'){
            $finalRejections = TubeBreatherKOKA::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Breather KOKA') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Breather Pridor'){
            $finalRejections = TubeBreatherPridor::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Breather Pridor') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Battery Breather CD-100'){
            $finalRejections = TubeBtryBreatherCD100::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Battery Breather CD-100') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Battery Breather CD-70'){
            $finalRejections = TubeBtryBreatherCD70::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Battery Breather CD-70') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Battery Breather CG-125'){
            $finalRejections = TubeBtryBreatherCG125::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Battery Breather Deluxe') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Battery Breather KOKA'){
            $finalRejections = TubeBtryBreatherKOKA::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Battery Breather KOKA') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Fuel CD-100'){
            $finalRejections = TubeFuelCD100::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Fuel CD-100') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Fuel CD-70'){
            $finalRejections = TubeFuelCD70::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Fuel CD-70') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Comp Fuel KOKA'){
            $finalRejections = TubeCompFuelKOKA::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Comp Fuel KOKA') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Comp Fuel Deluxe'){
            $finalRejections = TubeCompFuelDLX::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Comp Fuel Deluxe') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Suction CG-125'){
            $finalRejections = TubeSuctionCG125::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Suction CG-125') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Suction KOKA'){
            $finalRejections = TubeSuctionKOKA::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Suction KOKA') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Under Rubber Handle CD-100'){
            $finalRejections = UndrRbrHndlCD100::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Under Rubber Handle CD-100') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Battery Breather KSW'){
            $finalRejections = TubeBtryBreatherKSW::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Battery Breather KSW') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }

        $this->validate($request,[
            'month' => 'required',
            'part_name' => 'required|not_in:none'
        ]);
        Summary::create([
            'month' => $request->get('month'),
            'part_name' => $request->get('part_name'),
            'fnl_inspct_rjct' => $finalRejections,
            'prod_qty' => '111',
            'inspct_qty' => $inspectedQuantity,
        ]);
        return redirect()->to('qa/summary/quality');

    }

    /**
     * Display the specified resource.
     */


    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */


    public function edit(string $id)
    {
        $summary = Summary::find($id);
        return view('quality.summary.edit')->with(compact('summary'));
    }

    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, string $id)
    {

        $totalInspection = TotalInspection::get();


        if($request->get('part_name') == 'Tube Fuel CG-125'){
            $finalRejections = TubeFuelCG125::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Fuel CG-125') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Battery Breather Deluxe'){
            $finalRejections = TubeBtryBreatherDLX::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Battery Breather Deluxe') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Cushion Front Fuel Tank Deluxe'){
            $finalRejections = CshnFrntFuelTnkDLX::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Cushion Front Fuel Tank Deluxe') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Grommet A Rear Cover CD-100'){
            $finalRejections = GrmtARearCvrCD100::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Grommet A Rear Cover CD-100') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Grommet CD-70'){
            $finalRejections = GrmtCD70::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Grommet CD-70') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Grommet CG-125'){
            $finalRejections = GrmtCG125::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Grommet CG-125') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Grommet Side Cover Deluxe'){
            $finalRejections = GrmtSideCvrDLX::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Grommet Side Cover Deluxe') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Packing Rubber CD-100'){
            $finalRejections = PckngRbrCD100::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Packing Rubber CD-100') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Rubber Handle Cushion CD-100'){
            $finalRejections = RbrHndlCshnCD100::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Rubber Handle Cushion CD-100') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Rubber Muffler Mount Deluxe'){
            $finalRejections = RbrMflrMntDLX::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Rubber Muffler Mount Deluxe') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube 4 X 440 KOKA'){
            $finalRejections = Tube4X440KOKA::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube 4 X 440 KOKA') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube 8 X 150 CG-125'){
            $finalRejections = Tube8X150CG125::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube 8 X 150 CG-125') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube A Breather CG-125'){
            $finalRejections = TubeABreatherCG125::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube A Breather CG-125') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube ASV CG-125'){
            $finalRejections = TubeASVCntrlCG125::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube ASV CG-125') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube B Breather CD-70'){
            $finalRejections = TubeBBreatherCD70::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube B Breather CD-70') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube B Breather CG-125'){
            $finalRejections = TubeBBreatherCG125::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube B Breather CG-125') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Breather Deluxe'){
            $finalRejections = TubeBreatherDLX::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Breather Deluxe') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Breather KOKA'){
            $finalRejections = TubeBreatherKOKA::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Breather KOKA') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Breather Pridor'){
            $finalRejections = TubeBreatherPridor::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Breather Pridor') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Battery Breather CD-100'){
            $finalRejections = TubeBtryBreatherCD100::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Battery Breather CD-100') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Battery Breather CD-70'){
            $finalRejections = TubeBtryBreatherCD70::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Battery Breather CD-70') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Battery Breather CG-125'){
            $finalRejections = TubeBtryBreatherCG125::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Battery Breather Deluxe') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Battery Breather KOKA'){
            $finalRejections = TubeBtryBreatherKOKA::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Battery Breather KOKA') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Fuel CD-100'){
            $finalRejections = TubeFuelCD100::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Fuel CD-100') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Fuel CD-70'){
            $finalRejections = TubeFuelCD70::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Fuel CD-70') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Comp Fuel KOKA'){
            $finalRejections = TubeCompFuelKOKA::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Comp Fuel KOKA') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Comp Fuel Deluxe'){
            $finalRejections = TubeCompFuelDLX::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Comp Fuel Deluxe') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Suction CG-125'){
            $finalRejections = TubeSuctionCG125::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Suction CG-125') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Suction KOKA'){
            $finalRejections = TubeSuctionKOKA::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Suction KOKA') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Under Rubber Handle CD-100'){
            $finalRejections = UndrRbrHndlCD100::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Under Rubber Handle CD-100') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }
        if($request->get('part_name') == 'Tube Battery Breather KSW'){
            $finalRejections = TubeBtryBreatherKSW::where('date', $request->get('month'))->sum('total');
            $inspectedQuantity = collect($totalInspection)->where('part_name', 'Tube Battery Breather KSW') ->where('month', $request->get('month'))->pluck('ttl_inspct')->first();
        }


        $this->validate($request,[
            'month' => 'required',
            'part_name' => 'required|not_in:none'
        ]);
        $summary = Summary::find($id);
        $summary->update([
            'month' => $request->get('month'),
            'part_name' => $request->get('part_name'),
            'fnl_inspct_rjct' => $finalRejections,
            'prod_qty' => '111',
            'inspct_qty' => $inspectedQuantity,
        ]);
        return redirect()->to('qa/summary/quality');
    }

    /**
     * Remove the specified resource from storage.
     */


    public function destroy(string $id)
    {
        $summary = Summary::find($id);
        $summary->delete();
        return redirect()->to('qa/summary/quality');

    }

    public function search_data(Request $request){
        $data = $request->input('search');
        $records = Summary::where('month' , 'LIKE', ["%$data%"])->paginate(8);
        $table = Summary::where('month','LIKE',["%$data%"]);
        $finalRejections = $table->sum('fnl_inspct_rjct');
        return view('quality.summary.view',compact('records','data','finalRejections'));
    }
}
