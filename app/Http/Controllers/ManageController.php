<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;
use App\Model\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Rap2hpoutre\FastExcel\FastExcel;

class ManageController extends Controller
{
    public function showManageInfo()
    {
        return view('manage.index');
    }

    public function csvDownload()
    {
        $data = Book::all();

        return (new FastExcel($data))->download('bookList.csv', function ($data) {
            return [
                'ID' => $data->id,
                'title' => $data->title,
                'cost' => $data->cost,
                'memo' => $data->memo,
            ];
        });
    }

    public function userInfoDownload()
    {
        $data = User::all();

        return (new FastExcel($data))->download('userList.csv', function ($data) {
            return [
                'ID' => $data->id,
                'name' => $data->name,
                'email' => $data->email,
                'last_login_at' => $data->last_login_at,
                'created_at' => $data->created_at,
            ];
        });
    }
}
