<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $data = [
            'title' => 'Welcome to DMJ Software Developers',
            'tagline' => 'Innovative Solutions for Digital Transformation'
        ];
        return view('pages.home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us - DMJ Software Developers',
            'description' => 'Learn about our mission, vision, and values'
        ];
        return view('pages.about', $data);
    }

    public function services()
    {
        $services = [
            ['title' => 'Web Development', 'desc' => 'Custom web applications'],
            ['title' => 'Mobile Apps', 'desc' => 'iOS & Android development'],
            ['title' => 'Cloud Solutions', 'desc' => 'AWS, Azure, GCP'],
            ['title' => 'UI/UX Design', 'desc' => 'User-centered design'],
            ['title' => 'DevOps', 'desc' => 'CI/CD & Automation'],
            ['title' => 'Consulting', 'desc' => 'Technical advisory']
        ];
        
        return view('pages.services', compact('services'));
    }

    public function portfolio()
    {
        $projects = [
            ['name' => 'E-commerce Platform', 'category' => 'Web', 'image' => 'project1.jpg'],
            ['name' => 'Healthcare App', 'category' => 'Mobile', 'image' => 'project2.jpg'],
            ['name' => 'FinTech Solution', 'category' => 'Web', 'image' => 'project3.jpg'],
            ['name' => 'Education Portal', 'category' => 'Web', 'image' => 'project4.jpg'],
            ['name' => 'IoT Dashboard', 'category' => 'Web', 'image' => 'project5.jpg'],
            ['name' => 'Travel Booking App', 'category' => 'Mobile', 'image' => 'project6.jpg']
        ];
        
        return view('pages.portfolio', compact('projects'));
    }

    public function team()
    {
        $members = [
            ['name' => 'John Doe', 'position' => 'CEO & Founder', 'image' => 'team1.jpg'],
            ['name' => 'Jane Smith', 'position' => 'CTO', 'image' => 'team2.jpg'],
            ['name' => 'Mike Johnson', 'position' => 'Lead Developer', 'image' => 'team3.jpg'],
            ['name' => 'Sarah Wilson', 'position' => 'UI/UX Designer', 'image' => 'team4.jpg'],
            ['name' => 'David Brown', 'position' => 'Project Manager', 'image' => 'team5.jpg'],
            ['name' => 'Emily Davis', 'position' => 'QA Engineer', 'image' => 'team6.jpg']
        ];
        
        return view('pages.team', compact('members'));
    }

    public function careers()
    {
        $openings = [
            ['title' => 'Senior PHP Developer', 'type' => 'Full-time', 'location' => 'Remote'],
            ['title' => 'React Native Developer', 'type' => 'Full-time', 'location' => 'Hybrid'],
            ['title' => 'DevOps Engineer', 'type' => 'Contract', 'location' => 'Remote'],
            ['title' => 'UI/UX Designer', 'type' => 'Part-time', 'location' => 'On-site']
        ];
        
        return view('pages.careers', compact('openings'));
    }

    public function blog()
    {
        $posts = [
            ['title' => 'Laravel 11 Features', 'date' => '2024-01-15', 'category' => 'Technology'],
            ['title' => 'Best Practices for React', 'date' => '2024-01-10', 'category' => 'Development'],
            ['title' => 'Cloud Security Tips', 'date' => '2024-01-05', 'category' => 'Security'],
            ['title' => 'AI in Software Development', 'date' => '2024-01-01', 'category' => 'Innovation']
        ];
        
        return view('pages.blog', compact('posts'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy');
    }

    public function termsConditions()
    {
        return view('pages.terms');
    }
}