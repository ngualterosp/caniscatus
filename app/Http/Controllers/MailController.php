<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use TJGazel\Toastr\Facades\Toastr;
class MailController extends Controller
{
    //


    public function contact(Request $request){
        


        $subject = "Correo enviado desde la pagina web";
        $for = "info@caniscatus.com" ;
        Mail::send('email.email',$request->all(), function($msj) use($subject,$for,$request){
            $msj->from($request->email,$request->nombre);
            $msj->subject($subject);
            $msj->to($for);
        });
        Toastr::info( 'Muy pronto nos pondremos en contacto con usted','El correo se ha enviado!');
        return redirect()->route('contactenos');
    }
}
