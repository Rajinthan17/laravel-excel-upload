<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class ExcelController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xls,xlsx',
        ]);

        $file = $request->file('excel_file');

        $data = Excel::toArray([], $file);

        foreach ($data[0] as $value) {
            $user = new User();
            $user->name = $value[0];
            $user->email = $value[0];
            $user->password = Hash::make($value[0]);
            $user->save();
        }

        return 'Data imported successfully.';
    }
}
