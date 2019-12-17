<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mainnews;
use App\Gall;
use Mail; 

class MainController extends Controller
{
    public function index(){
        $mainnews = Mainnews::latest()
        ->limit(3)
        ->get();
        return view ('pages.main', compact('mainnews'));
    }
    public function uchast(){
        return view ('pages.uchast');
    }
    public function allphotos(){
        $galls = Gall::latest()
        ->get();
        return view ('pages.allphotos', compact('galls'));
    }
    public function allnews(){
        $mainnews = Mainnews::latest()
        ->paginate(9);
        return view ('pages.allnews', compact('mainnews'));
    }
    public function newssolo(Mainnews $solo){
        return view ('pages.newssolo', compact('solo'));
    }
    public function project(){
        return view ('pages.project');
    }
    public function district1(){
        return view ('pages.patch1');
    }
    public function district2(){
        return view ('pages.patch2');
    }
    public function district3(){
        return view ('pages.patch3');
    }
    public function district4(){
        return view ('pages.patch4');
    }
    public function district5(){
        return view ('pages.patch5');
    }
    public function district6(){
        return view ('pages.patch6');
    }
    public function district7(){
        return view ('pages.patch7');
    }
    public function district8(){
        return view ('pages.patch8');
    }
    public function district9(){
        return view ('pages.patch9');
    }
    public function district10(){
        return view ('pages.patch10');
    }
    public function district11(){
        return view ('pages.patch11');
    }
    public function district12(){
        return view ('pages.patch12');
    }
    public function contact_f(Request $request)
      {
    $to_name = "AIR";
    $to_email = "info@rusinnovations.com";
    $data = array(
        'contact_email' => request('contact_email'),
        'phone' => request('phone'),
        'text_contact' => request('text_contact'),
    );
      Mail::send('email.mailcontact', $data, function($message) use ($data, $to_email, $to_name)
      {
        $message->from($data['contact_email'],$data['phone'], $data['text_contact']);
        $message->to($to_email)->subject('Message from site');
     });

     back()->with('message_1', 'Ваш вопрос отправлен куратору школы и в ближайшее время мы свяжемся с вами, чтобы ответить на него!');
     return redirect('/#footer')->with('message', 'СПАСИБО ЗА ВАШУ АКТИВНОСТЬ И ИНТЕРЕС!');
    }
}
