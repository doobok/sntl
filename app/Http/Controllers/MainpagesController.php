<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Project;
use App\Models\Vendor;

class MainpagesController extends Controller
{
    public function index()
    {
      $customers = Customer::where('active', 1)->orderBy('order', 'desc')->get();
      $vendors = Vendor::where('active', 1)->where('important', 1)->orderBy('order', 'desc')->get();
      $projects = Project::orderBy('id', 'desc')->limit(10)->get()->translate(\App::getLocale());

      return view('main.pages.index', [
        'customers' => $customers,
        'vendors' => $vendors,
        'projects' => $projects,
      ]);
    }

    public function contacts()
    {
      return view('main.pages.contacts');
    }

    public function portfolio()
    {
      $projects = Project::all();

      return view('main.pages.portfolio', [
        'projects' => $projects
      ]);
    }

    public function project($slug)
    {
      $page = Project::where('slug', $slug)->firstorfail();
      $projects = Project::where('id', '!=', $page->id)->orderBy('id', 'desc')->limit(3)->get();

      return view('main.pages.project', [
        'page' => $page,
        'projects' => $projects
      ]);
    }

    public function partners()
    {
      $vendors = Vendor::where('active', 1)->orderBy('name', 'asc')->get();

      return view('main.pages.partners', [
        'vendors' => $vendors
      ]);
    }
}
