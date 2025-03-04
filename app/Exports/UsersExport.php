<?php

namespace App\Exports;

use App\Models\UserData;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromArray, WithHeadings
{
    // public function collection()
    // {
    //     return UserData::select('id', 'name', 'email', 'phone', 'created_at')->get();
    // }

    // public function headings(): array
    // {
    //     return ['ID', 'Name', 'Email', 'Phone', 'Created At'];
    // }

    public function array(): array
    {
        $users = UserData::select('id', 'name', 'email', 'phone', 'created_at')->get();

        $data = [];
        foreach ($users as $user) {
            $data[] = [
                $user->id,
                $user->name,
                $user->email,
                $user->phone,
                $user->created_at->format('Y-m-d H:i'),
            ];
        }

        return $data;
    }

    public function headings(): array
    {
        return ['ID', 'Name', 'Email', 'Phone', 'Created At'];
    }
}
