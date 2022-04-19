<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;

class StoreController extends Controller
{
    /**
     * a
     *
     * @var string
     */
    public $a;
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Category::firstOrCreate($data);
        return redirect()->route('admin.category.index');
        // return view('admin.categories.create');
    }
}
