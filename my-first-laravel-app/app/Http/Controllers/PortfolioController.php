<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'BoyG',

            'title' => 'Full Stack Web Developer',

            'email' => 'joshtaralde38@gmail.com',

            'phone' => '+639074562134',

            'location' => 'PH, Manila',

            'bio' => 'Passionate web developer with 5+ years of experience...',

            'profile_image' => 'https://lh3.googleusercontent.com/a/ACg8ocLdc8M3zuguWyyDlL0Wj08OQTIulLmv_dnn-uyahdIxLLYgkrk=s288-c-no ',

            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],

            'projects' => [], // Project data

            'experience' => [], // Experience data

            'education' => [], // Education data

            'social_links' => [] // Social media links

        ];

        return view('portfolio.index', compact('portfolio'));

    }

}