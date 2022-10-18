<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserParking;
use Illuminate\Support\Facades\Storage;


use App\Models\PdfFile;


use PDF;


class ApiController extends Controller
{
    //===============================Add  parking Routes================================
    public function parking_data(Request $request)
    {
        $result = json_decode($request->getContent(), true);


        $request->validate([
            'car_drop_date' => 'required',
            'car_drop_time' => 'required',
            'car_pick_date' => 'required',
            'car_pick_time' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'no_plate' => 'required',
            'state' => 'required',
            'make_of_vehicle' => 'required',
            'color' => 'required',
            'model' => 'required',
            'contact' => 'required',
            'suv' => 'required',
            'check_in' => 'required',
            'bicycle_rack' => 'required',
            'signature_initial' => 'required',
            'pic_1' => 'required',
            'pic_2' => 'required',
            'pic_3' => 'required',
            'pic_4' => 'required',
            'pic_5' => 'required',
            'signature_final' => 'required',
            'attendent' => 'required',
            'ticket_no' => 'required',
            'booking_site' => 'required',
            'reservation' => 'required',
            'due_at_lot' => 'required',
            'add_1' => 'required',
            'add_2' => 'required',
            'paid' => 'required',
            'due' => 'required',
            'office_desc' => 'required',
            'customer_sig' => 'required',

        ]);


        $parking = new UserParking();
        $parking->car_drop_date = $result['car_drop_date'];
        $parking->car_drop_time = $result['car_drop_time'];
        $parking->car_pick_date = $result['car_pick_date'];
        $parking->car_pick_time = $result['car_pick_time'];
        $parking->first_name = $result['first_name'];
        $parking->last_name = $result['last_name'];
        $parking->no_plate = $result['no_plate'];
        $parking->state = $result['state'];
        $parking->make_of_vehicle = $result['make_of_vehicle'];
        $parking->color = $result['color'];
        $parking->model = $result['model'];
        $parking->contact = $result['contact'];
        $parking->suv = $result['suv'];
        $parking->check_in = $result['check_in'];
        $parking->bicycle_rack = $result['bicycle_rack'];
        $parking->signature_initial = $result['signature_initial'];
        $parking->pic_1 = $result['pic_1'];
        $parking->pic_2 = $result['pic_2'];
        $parking->pic_3 = $result['pic_3'];
        $parking->pic_4 = $result['pic_4'];
        $parking->pic_5 = $result['pic_5'];
        $parking->signature_final = $result['signature_final'];
        $parking->attendent = $result['attendent'];
        $parking->ticket_no = $result['ticket_no'];
        $parking->booking_site = $result['booking_site'];
        $parking->reservation = $result['reservation'];
        $parking->due_at_lot = $result['due_at_lot'];
        $parking->add_1 = $result['add_1'];
        $parking->add_2 = $result['add_2'];
        $parking->paid = $result['paid'];
        $parking->due = $result['due'];
        $parking->office_desc = $result['office_desc'];
        $parking->customer_sig = $result['customer_sig'];
        $parking->save();

        if (is_null($parking)) {

            $res['status'] = false;
            $res['message'] = "Parking data Can't Added Successfully!!";
            return response()->json($res);
        } else {

            $res['status'] = true;
            $res['message'] = "Parking data Added Successfully!!";
            $res['data'] = $parking;

            $data['parking']=$parking;
            $pdf = PDF::setPaper('a4', 'potrait')->loadView('data', $data);
            $pdf_name = 'public/pdf/' . $parking->ticket_no . '.pdf';
            $path = Storage::put($pdf_name, $pdf->output());

            $size = Storage::size($pdf_name);

            $pdf_files = new PdfFile();
            $pdf_files->pdf_file =  $pdf_name;
            $pdf_files->file_name = $parking->ticket_no . '.pdf';
            $pdf_files->file_size = $size;
            $pdf_files->save();

            return response()->json($res);
        }
    }

    public function pdf(){

        $pdf = PdfFile::all();

        if(is_null($pdf)){

            $res['status'] = false;
            $res['message'] = "file not found!!";
            return response()->json($res);

        } else {

            $res['status'] = True;
            $res['message'] = "pdf list!!";
            $res['data'] = $pdf;
            return response()->json($res);
        }

    }
}
