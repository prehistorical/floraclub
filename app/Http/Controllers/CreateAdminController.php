<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Block;

class CreateAdminController extends Controller
{
    public function createGroupItem($block)
    {
        try {

            $block = Block::findOrFail($block);

            $item = $block->createGroupItem();

            $status = 'OK';

            $complhtml = view('back/blocks/'.$block->name.'_groupitem', compact('item'))->render();

            return compact('status', 'complhtml');

        } catch(Exception $exception) {

            return ['status'=>('Что-то пошло не так. '.$exception->getMessage())];
        }

    }

    public function createInit()
    {

        try {

            Block::initBlocks();
        } catch(Exception $exception) {

            return ['status'=>('Что-то пошло не так. '.$exception->getMessage())];
        }

        return ['status'=>'OK'];
    }
}
