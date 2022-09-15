<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\education;
use App\Models\experience;
use App\Models\firstPage;
use App\Models\partenr;
use App\Models\portfolio;
use App\Models\portfolioCategory;
use App\Models\Service;
use App\Models\SkillCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $firstPages = firstPage::first();
        $about = About::first();
        $skillsCategories = SkillCategory::with('skills')->get();
        $services = Service::get();
        $portfolioCategories = portfolioCategory::get();
        $portfolios = portfolio::with('category')->get();
        $educations = education::get();
        $experiences = experience::get();
        $partenrs = partenr::get();

        return view('index', compact(
            'firstPages',
            'about',
            'skillsCategories',
            'services',
            'portfolioCategories',
            'portfolios',
            'educations',
            'experiences',
            'partenrs'

        ));
    }
}
