<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show()
    {
        return view();
    }


    public function names()
    {
        $collection = collect(["arne", "brenda"]);

//        $i = 1;
//
//        foreach (namen as $collection)
//        {
//            for ( $i <= $this->namen(); $i += 1)
//            {
//
//                $formatted = implode(' ',str_split($this->namen()));
//            }
//        }

    }
}
