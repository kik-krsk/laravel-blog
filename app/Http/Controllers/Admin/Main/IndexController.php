<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * a
     *
     * @var string
     */
    public $a;
    public function __invoke()
    {
        return view('admin.main.index');
    }
}
