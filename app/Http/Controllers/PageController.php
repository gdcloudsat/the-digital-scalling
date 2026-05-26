<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\Post;
use App\Models\Faq;
use App\Models\JobListing;
use App\Models\LegalPage;
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
        return view('pages.services.index', compact('services'));
    }

    public function serviceShow($slug)
    {
        $service = Service::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $relatedServices = Service::where('is_active', true)->where('id', '!=', $service->id)->take(3)->get();
        return view('pages.services.show', compact('service', 'relatedServices'));
    }

    public function projects()
    {
        $projects = Project::where('is_published', true)->latest()->paginate(12);
        return view('pages.projects.index', compact('projects'));
    }

    public function projectShow($slug)
    {
        $project = Project::where('slug', $slug)->where('is_published', true)->firstOrFail();
        $relatedProjects = Project::where('is_published', true)->where('id', '!=', $project->id)->take(3)->get();
        return view('pages.projects.show', compact('project', 'relatedProjects'));
    }

    public function blog()
    {
        $posts = Post::whereNotNull('published_at')->where('published_at', '<=', now())->latest('published_at')->paginate(9);
        return view('pages.blog.index', compact('posts'));
    }

    public function blogShow($slug)
    {
        $post = Post::where('slug', $slug)->whereNotNull('published_at')->where('published_at', '<=', now())->firstOrFail();
        $relatedPosts = Post::whereNotNull('published_at')->where('published_at', '<=', now())->where('id', '!=', $post->id)->take(3)->get();
        return view('pages.blog.show', compact('post', 'relatedPosts'));
    }

    public function faq()
    {
        $faqs = Faq::where('is_active', true)->orderBy('order')->get();
        return view('pages.faq', compact('faqs'));
    }

    public function careers()
    {
        $jobs = JobListing::where('is_active', true)->latest('published_at')->get();
        return view('pages.careers.index', compact('jobs'));
    }

    public function careerShow($slug)
    {
        $job = JobListing::where('slug', $slug)->where('is_active', true)->firstOrFail();
        return view('pages.careers.show', compact('job'));
    }

    public function legal($slug)
    {
        $page = LegalPage::where('slug', $slug)->firstOrFail();
        return view('pages.legal', compact('page'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
