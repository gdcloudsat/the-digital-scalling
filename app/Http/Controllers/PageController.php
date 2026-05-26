<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->orderBy('order')->take(6)->get();
        $projects = Project::where('is_published', true)->latest()->take(6)->get();
        $posts = Post::whereNotNull('published_at')->where('published_at', '<=', now())->latest('published_at')->take(3)->get();

        return view('pages.home', compact('services', 'projects', 'posts'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $services = Service::where('is_active', true)->orderBy('order')->get();
        return view('pages.services', compact('services'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
