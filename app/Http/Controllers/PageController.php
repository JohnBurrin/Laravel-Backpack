<?php

namespace App\Http\Controllers;

use Backpack\PageManager\app\Models\Page;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index($slug, $subs = null)
    {
        $page = Page::findBySlug($slug);
        $pages = Page::all();

        if (! $page) {
            abort(404, 'Please go back to our <a href="' . url('') . '">homepage</a>.');
        }

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();
        $this->data['pages'] = $pages;

        return view('pages.'.$page->template, $this->data);
    }

    public function homepage()
    {
        return view('home', []);
    }

    public function welcome()
    {
        $this->data['latest'] = Page::orderBy('updated_at', 'desc')->take(10)->get();
        $this->data['featured'] = Page::orderBy('created_at', 'desc')->where('is_featured', 1)->take(10)->get();
        $this->data['pages'] = Page::all();
        return view('welcome', $this->data);
    }
}
