<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Block;
use App\Stringfield;
use App\Textfield;
use App\Numb;
use App\Imageitem;

class DisplayAdminController extends Controller
{
    public function displayIndex()
    {

        try {

            $dataArr = Block::getBlocksDisplayArray();

            return view('back/adminka', $dataArr);

        } catch(\Exception $exception) {

            return ['status'=>('Что-то пошло не так. '.$exception->getMessage())];
        }

    }
}
