<?php

namespace OptionVendor\OptionPackage\app\Http\Controllers;

use Illuminate\Routing\Controller;

/**
 * Class SkillCrudController
 */
class SkillCrudController extends Controller
{
    /**
     * Lists all log files.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('optionvendor::optionvendor');
    }
}
