<?php

namespace App\Http\Controllers\Home;

use App\Mail\JoinTheTeam;
use App\Mail\SendMessage;
use App\Persistence\Eloquent\Entities\NewsletterSubscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class HomeMainController extends Controller
{
    /**
     *Show the home page
     */
    public function home(){
        return view('front.home');
    }

    /**
     *Show the contact page
     */
    public function contact(){
        return view('front.contact');
    }

    /**
     *Show the about page
     */
    public function about(){
        return view('front.about');
    }

    /**
     *Show the services page
     */
    public function services(){
        return view('front.services');
    }

    /**
     *Show the insights page
     */
    public function insights(){
        if(App::environment() === 'local'){
            $url = 'http://insights.localhost';
        }else{
            $url = 'http://www.alanandgrant.com/insights';
        }
        return redirect($url);
    }

    /**
     *Show the learning page
     */
    public function learning(){
        return view('front.learning');
    }

    /**
     *Show the jobs page
     */
    public function jobs(){
        return view('front.jobs');
    }

    /**
     *Show the events page
     */
    public function events(){
        return view('front.events');
    }

    /**
     * Send Message
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendMessage(Request $request){
        //Validate Form Inputs
        $validator = \Validator::make($request->all(), [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required|min:8'
        ]);

        $response = [
            'status' => 0,
            'message' => 'Some fields were left blank. Please fill up required fields.'
        ];

        //If Validation fails, return error list in JSON format to Ajax Call
        if ($validator->fails()) {
            return response()->json($response);
        }

        $mailData = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message')
        ];

        Mail::to(config('mail.to.address'))->send(new SendMessage($mailData));

        $response = [
            'status' => 1,
            'message' => 'Thank you for your mail. We will get back to you soon.'
        ];

        return response()->json($response);
    }

    public function newsletterSubscribe(Request $request){
        //Validate Form Inputs
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletter_subscriptions,email',
        ]);

        $response = [
            'status' => 0,
            'message' => 'Please enter a valid email address.'
        ];

        //If Validation fails, return error list in JSON format to Ajax Call
        if ($validator->fails()) {
            return response()->json($response);
        }

        //Save Email Address
        $date = date("Y-m-d H:i:s", strtotime("1 hour"));

        $letter = new NewsletterSubscription();
        $letter->email = $request['email'];
        $letter->created_on = $date;

        if ($letter->save()) {
            $response = [
                'status' => 1,
                'message' => 'Thank you for subscribing to our newsletter.'
            ];
        }

        return response()->json($response);
    }

    public function joinTheTeam(Request $request){
        //Validate Form Inputs
        $validator = \Validator::make($request->all(), [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'type' => 'required',
            'reason' => 'required|min:8'
        ]);

        $response = [
            'status' => 0,
            'message' => 'Some fields were left blank. Please fill up required fields.'
        ];

        //If Validation fails, return error list in JSON format to Ajax Call
        if ($validator->fails()) {
            return response()->json($response);
        }

        $mailData = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'type' => $request->get('type'),
            'reason' => $request->get('reason')
        ];

        Mail::to(config('mail.join.address'))->send(new JoinTheTeam($mailData));

        $response = [
            'status' => 1,
            'message' => 'Thank you for your interest. We will get back to you soon.'
        ];

        return response()->json($response);
    }
}
