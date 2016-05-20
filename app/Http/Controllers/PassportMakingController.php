<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PassportMaking;
use Auth;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PassportMakingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passport_makings = PassportMaking::whereManagerId(Auth::user()->id)->get();
        foreach ($passport_makings as $passport_making) {
            $passport_making->isComplete = $this->status_check($passport_making);
        }
        // return $passport_makings;
        return view('passportmaking.index')
                    ->with('title', 'Passport Makings')->with('passport_makings', $passport_makings);
    }
     public function status_check($passport_making){
        if($passport_making->medical_test_status == null || $passport_making->gamcca_date == null ||
            $passport_making->enzaz_date == null || $passport_making->fit_receive_date == null ||
            $passport_making->police_paper_date == null || $passport_making->embassy_date == null ||
            $passport_making->fingering_date == null || $passport_making->manpower_date == null ||
             $passport_making->ticket_ticket_purchase_date == null
            ){
            return false;
        }
        return true;
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('passportmaking.create')
                    ->with('title', 'Create Passport Making');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'name'              => 'required',
            'passport_no'       => 'required',
            'broker_name'       => 'required',
            'amount_of_money'       => 'required'
        ];
        $data = $request->all();

        $validation = Validator::make($data,$rules);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }else{
            $passport_making = new PassportMaking;
            $passport_making->name = $data['name'];
            $passport_making->passport_no = $data['passport_no'];
            $passport_making->broker_name = $data['broker_name'];
            $passport_making->amount_of_money = $data['amount_of_money'];
            $passport_making->manager_id = Auth::user()->id;
            
            
            if($passport_making->save()){
                // Auth::logout();
                return redirect()->route('passportmaking.index')
                            ->with('success','Created successfully.');
            }else{
                return redirect()->route('dashboard')
                            ->with('error',"Something went wrong.Please Try again.");
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $passport_receive = PassportMaking::find($id);
        return view('passportmaking.edit')
                    ->with('title', 'Create Passport Making');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $statuses = [
            'incomplete' => 'Incomplete',
            'complete' => 'Complete'
        ];

        $fit_statuses = [
            'unfit' => 'Un Fit',
            'fit' => 'Fit'
        ];
        $passport_making = PassportMaking::find($id);
        return view('passportmaking.edit')->with('statuses',$statuses)->withFitStatuses($fit_statuses)
                    ->with('title', 'Update Passport Making')->with('passport_making', $passport_making);
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
        $type = $request->get('type');
        $passport_making = PassportMaking::find($id);
        if($type == 1){
            $rules =[

                'name'              => 'required',
                'passport_no'       => 'required',
                'broker_name'       => 'required',
                'amount_of_money'       => 'required'
            ];
            $data = $request->all();

            $validation = Validator::make($data,$rules);

            if($validation->fails()){
                $data['error'] = [
                    'message' => $validation->messages(),
                    'http_status' => 400
                ];
                return response()->json($data, 400);
            }
            $passport_making->name = $data['name'];
            $passport_making->passport_no = $data['passport_no'];
            $passport_making->broker_name = $data['broker_name'];
            $passport_making->amount_of_money = $data['amount_of_money'];
            if($passport_making->save()){
                // Auth::logout();

                $data['data'] = [
                    'message' => 'success',
                    'http_status' => 200
                ];
                return response()->json($data, 200);
            }else{
                $data['error'] = [
                    'message' => 'failed',
                    'http_status' => 404
                ];
                return response()->json($data, 404);
            }

        }else if ($type == 2) {
            $rules =[

                'medical_test_status'              => 'required',
                // 'medical_test_file_upload'       => 'required',
                'medical_test_date'       => 'required'
                // 'amount_of_money'       => 'required'
            ];
            $data = $request->all();

            $validation = Validator::make($data,$rules);

            if($validation->fails()){
                $data['error'] = [
                    'message' => $validation->messages(),
                    'http_status' => 400
                ];
                return response()->json($data, 400);
            }
            $passport_making->medical_test_status = $data['medical_test_status'];
            $passport_making->medical_test_file_upload = $data['medical_test_file_upload'];
            $passport_making->medical_test_date = $data['medical_test_date'];
            // $passport_making->amount_of_money = $data['amount_of_money'];
            if($passport_making->save()){
                // Auth::logout();

                $data['data'] = [
                    'message' => 'success',
                    'http_status' => 200
                ];
                return response()->json($data, 200);
            }else{
                $data['error'] = [
                    'message' => 'failed',
                    'http_status' => 404
                ];
                return response()->json($data, 404);
            }

        }else if ($type == 3) {
            $rules =[

                'gamcca_amount_of_money'              => 'required',
                'gamcca_date'       => 'required'
            ];
            $data = $request->all();

            $validation = Validator::make($data,$rules);

            if($validation->fails()){
                $data['error'] = [
                    'message' => $validation->messages(),
                    'http_status' => 400
                ];
                return response()->json($data, 400);
            }
            $passport_making->gamcca_amount_of_money = $data['gamcca_amount_of_money'];
            $passport_making->gamcca_date = $data['gamcca_date'];
            if($passport_making->save()){
                // Auth::logout();

                $data['data'] = [
                    'message' => 'success',
                    'http_status' => 200
                ];
                return response()->json($data, 200);
            }else{
                $data['error'] = [
                    'message' => 'failed',
                    'http_status' => 404
                ];
                return response()->json($data, 404);
            }

        }else if ($type == 4) {
            
            $rules =[

                'enzaz_amount_of_money'              => 'required',
                'enzaz_okala_name'       => 'required',
                // 'enzaz_file_upload'       => 'required',
                'enzaz_date'       => 'required'
            ];
            $data = $request->all();

            $validation = Validator::make($data,$rules);

            if($validation->fails()){
                $data['error'] = [
                    'message' => $validation->messages(),
                    'http_status' => 400
                ];
                return response()->json($data, 400);
            }
            $passport_making->enzaz_amount_of_money = $data['enzaz_amount_of_money'];
            $passport_making->enzaz_okala_name = $data['enzaz_okala_name'];
            $passport_making->enzaz_file_upload = $data['enzaz_file_upload'];
            $passport_making->enzaz_date = $data['enzaz_date'];
            if($passport_making->save()){
                // Auth::logout();

                $data['data'] = [
                    'message' => 'success',
                    'http_status' => 200
                ];
                return response()->json($data, 200);
            }else{
                $data['error'] = [
                    'message' => 'failed',
                    'http_status' => 404
                ];
                return response()->json($data, 404);
            }


        }else if ($type == 5) {
            
            $rules =[

                'fit_receive_medical_name'              => 'required',
                // 'fit_receive_file_upload'       => 'required',
                'fit_receive_date'       => 'required'
            ];
            $data = $request->all();

            $validation = Validator::make($data,$rules);

            if($validation->fails()){
                $data['error'] = [
                    'message' => $validation->messages(),
                    'http_status' => 400
                ];
                return response()->json($data, 400);
            }
            $passport_making->fit_receive_medical_name = $data['fit_receive_medical_name'];
            $passport_making->fit_receive_file_upload = $data['fit_receive_file_upload'];
            $passport_making->fit_receive_date = $data['fit_receive_date'];
            // $passport_making->enzaz_date = $data['enzaz_date'];
            if($passport_making->save()){
                // Auth::logout();

                $data['data'] = [
                    'message' => 'success',
                    'http_status' => 200
                ];
                return response()->json($data, 200);
            }else{
                $data['error'] = [
                    'message' => 'failed',
                    'http_status' => 404
                ];
                return response()->json($data, 404);
            }
        }else if ($type == 6) {
            $rules =[

                'police_paper_status'              => 'required',
                'police_paper_date'       => 'required'
            ];
            $data = $request->all();

            $validation = Validator::make($data,$rules);

            if($validation->fails()){
                $data['error'] = [
                    'message' => $validation->messages(),
                    'http_status' => 400
                ];
                return response()->json($data, 400);
            }
            $passport_making->police_paper_status = $data['police_paper_status'];
            $passport_making->police_paper_date = $data['police_paper_date'];
            if($passport_making->save()){
                // Auth::logout();

                $data['data'] = [
                    'message' => 'success',
                    'http_status' => 200
                ];
                return response()->json($data, 200);
            }else{
                $data['error'] = [
                    'message' => 'failed',
                    'http_status' => 404
                ];
                return response()->json($data, 404);
            }

        }else if ($type == 7) {
            $rules =[

                'embassy_visa_stamping_status'              => 'required',
                // 'embassy_file_upload'       => 'required',
                'embassy_sponsor_name'       => 'required',
                'embassy_date'       => 'required'
            ];
            $data = $request->all();

            $validation = Validator::make($data,$rules);

            if($validation->fails()){
                $data['error'] = [
                    'message' => $validation->messages(),
                    'http_status' => 400
                ];
                return response()->json($data, 400);
            }
            $passport_making->embassy_visa_stamping_status = $data['embassy_visa_stamping_status'];
            $passport_making->embassy_file_upload = $data['embassy_file_upload'];
            $passport_making->embassy_sponsor_name = $data['embassy_sponsor_name'];
            $passport_making->embassy_date = $data['embassy_date'];
            if($passport_making->save()){
                // Auth::logout();

                $data['data'] = [
                    'message' => 'success',
                    'http_status' => 200
                ];
                return response()->json($data, 200);
            }else{
                $data['error'] = [
                    'message' => 'failed',
                    'http_status' => 404
                ];
                return response()->json($data, 404);
            }

        }else if($type == 8) {
            $rules =[

                'fingering_status'              => 'required',
                'fingering_date'       => 'required'
            ];
            $data = $request->all();

            $validation = Validator::make($data,$rules);

            if($validation->fails()){
                $data['error'] = [
                    'message' => $validation->messages(),
                    'http_status' => 400
                ];
                return response()->json($data, 400);
            }
            $passport_making->fingering_status = $data['fingering_status'];
            $passport_making->fingering_date = $data['fingering_date'];
                // Auth::logout();
            if($passport_making->save()){
                $data['data'] = [
                    'message' => 'success',
                    'http_status' => 200
                ];
                return response()->json($data, 200);
            }else{
                $data['error'] = [
                    'message' => 'failed',
                    'http_status' => 404
                ];
                return response()->json($data, 404);
            }
        }else if ($type == 9) {
            $rules =[

                'manpower_status'              => 'required',
                'manpower_manpower_id'       => 'required',
                'manpower_national_id'       => 'required',
                'manpower_visa_id'       => 'required',
                'manpower_date'       => 'required'
            ];
            $data = $request->all();

            $validation = Validator::make($data,$rules);

            if($validation->fails()){
                $data['error'] = [
                    'message' => $validation->messages(),
                    'http_status' => 400
                ];
                return response()->json($data, 400);
            }
            $passport_making->manpower_status = $data['manpower_status'];
            $passport_making->manpower_manpower_id = $data['manpower_manpower_id'];
            $passport_making->manpower_national_id = $data['manpower_national_id'];
            $passport_making->manpower_visa_id = $data['manpower_visa_id'];
            $passport_making->manpower_date = $data['manpower_date'];

            if($passport_making->save()){
                // Auth::logout();

                $data['data'] = [
                    'message' => 'success',
                    'http_status' => 200
                ];
                return response()->json($data, 200);
            }else{
                $data['error'] = [
                    'message' => 'failed',
                    'http_status' => 404
                ];
                return response()->json($data, 404);
            }
        }
        else if ($type == 10) {
            $rules =[

                'ticket_price_in_taka_and_dollar'              => 'required',
                'ticket_flying_time'       => 'required',
                'ticket_ticket_purchase_date'       => 'required'
            ];
            $data = $request->all();

            $validation = Validator::make($data,$rules);

            if($validation->fails()){
                $data['error'] = [
                    'message' => $validation->messages(),
                    'http_status' => 400
                ];
                return response()->json($data, 400);
            }
            $passport_making->ticket_price_in_taka_and_dollar = $data['ticket_price_in_taka_and_dollar'];
            $passport_making->ticket_flying_time = $data['ticket_flying_time'];
            $passport_making->ticket_ticket_purchase_date = $data['ticket_ticket_purchase_date'];
            if($passport_making->save()){
                // Auth::logout();

                $data['data'] = [
                    'message' => 'success',
                    'http_status' => 200
                ];
                return response()->json($data, 200);
            }else{
                $data['error'] = [
                    'message' => 'failed',
                    'http_status' => 404
                ];
                return response()->json($data, 404);
            }
        }
        else
        {
            $data['error'] = [
                'message' => 'type field required',
                'http_status' => 404
            ];
            return response()->json($data, 404);
        }

      
            
            
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $passport_making = PassportMaking::find($id);
            $passport_making->delete();
            return redirect()->route('passportmaking.index')
                            ->with('success','Deleted successfully.');
        } catch (Exception $e) {
            
        }
    }
}
