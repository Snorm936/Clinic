<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function index()
    {
        return view('front_home');
    } 
       
    public function about()
    {
        $data['title'] = "About Us";
        $data['path'] = "About";
        return view('front_about',$data);
    }
    public function service()
    {
        $data['title'] = "Services";
        $data['path'] = "Services";
        return view('front_service',$data);
    }
    public function feature()
    {
        $data['title'] = "Feature";
        $data['path'] = "Feature";
        return view('front_feature',$data);
    }
    public function doctor()
    {
        $data['title'] = "Doctors";
        $data['path'] = "Doctors";
        return view('front_doctor',$data);
    }
    public function appointment()
    {
        $data['title'] = "Appointment";
        $data['path'] = "Appointment";
        return view('front_appointment',$data);
    }
    public function testimonial()
    {
        $data['title'] = "Testimonial";
        $data['path'] = "Testimonial";
        return view('front_testimonial',$data);
    }
    public function error()
    {
        $data['title'] = "404";
        $data['path'] = "Error";
        return view('front_error',$data);
    }
    public function contact()
    {
        $data['title'] = "Contact";
        $data['path'] = "Contact";
        return view('front_contact',$data);
    }
}
