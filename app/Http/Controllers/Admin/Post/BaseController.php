<?php

namespace App\Http\Controllers\Admin\Post;

use App\Service\PostService;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    /**
     * service
     *
     * @var PostService
     */
    public $service;

    public function __construct(PostService $service)
    {
        $this->service = new PostService();
    }
}
