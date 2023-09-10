<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use GuzzleHttp\Psr7\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return response()->json(Company::paginate(10));
    }
}
