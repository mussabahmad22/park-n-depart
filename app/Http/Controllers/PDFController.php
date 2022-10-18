<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\PdfFile;
use App\Models\UserParking;
use PDF;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function data()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
        
        $parking = UserParking::find(8);
        $data['parking']=$parking;
        
          
        $pdf = PDF::setPaper('a4', 'potrait')->loadView('data', $data);
        $pdf_name='public/pdf/'.time().'.pdf';
        $path = Storage::put($pdf_name, $pdf->output());
        
        // $pdf_files = new PdfFile();
        // $pdf_files->pdf_file =  $pdf_name;
        // $pdf_files->save();
      
        return view('data', compact('parking'));

        //  return $pdf->stream('parking.pdf');

       
    
        // return view('data');
    }

    public function table(){
        return view('form');
    }
}