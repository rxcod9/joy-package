<?php

namespace Joy\ReplaceKeyword\Http\Controllers;

use Joy\ReplaceKeyword\Http\Traits\ReplaceKeywordAction;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    use ReplaceKeywordAction;
}
