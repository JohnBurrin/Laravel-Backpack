<?php

namespace App\Http\Controllers;

use Backpack\PageManager\app\Models\Page;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

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
        $pages = Page::all();
        $this->data['newpages'] = Page::orderBy('created_at', 'desc')->where('created_at', '<=', Carbon::today()->addDays(7))->take(2)->get();
        $this->data['latest'] = Page::orderBy('updated_at', 'desc')->take(10)->get();
        $this->data['featured'] = Page::orderBy('created_at', 'desc')->where('is_featured', true)->take(10)->get();
        $this->data['pages'] = $pages;
        return view('welcome', $this->data);
    }
}
