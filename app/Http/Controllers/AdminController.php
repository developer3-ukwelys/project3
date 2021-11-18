<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Admin;
use Mail;
class AdminController extends Controller
{
   public function index()
{
return view('admins');
} 

   public function adminsPost(Request $request) 
   {
    $this->validate($request, [ 
        'name' => 'required', 
        'email' => 'required|email',
         'message' => 'required' ]
        );

    Admin::create($request->all()); 
   
//     Mail::send('email',
//        array(
//            'name' => $request->get('name'),
//            'email' => $request->get('email'),
//            'user_message' => $request->get('message')
//        ), function($message)
//    {
//        $message->from('saquib.gt@gmail.com');
//        $message->to('saquib.rizwan@cloudways.com', 'Admin')->subject('Cloudways Feedback');
//    });
    return back()->with('success', 'Thanks for contacting us!'); 
   }
}