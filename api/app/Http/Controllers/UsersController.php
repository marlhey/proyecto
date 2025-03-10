<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class UsersController extends Controller
{
    public function sendEmail(){
        $data['code']=rand(1000,9999);
        $to="pinamaricruz858@gmail.com"; //destino email del usuario
        $subject="Código de verificación";//asunto de correo
        Mail::send('mails.verification',$data,function($message) use ($to,$subject){
                $message->to($to,'Mi tienda online')
                ->subject($subject);
                $message->from('americamgd22@gmail.com',"Bienvenido a mi tienda Online");
                        });
        echo"Sen envió el correo";
    }

    public function viewUser()
    {
            $user = User::all();
    
            return view('admin.users')
            ->with('data', $user);
    }


}
