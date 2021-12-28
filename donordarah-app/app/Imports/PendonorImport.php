<?php

namespace App\Imports;

use App\Models\Pendonor;
use Maatwebsite\Excel\Concerns\ToModel;

class PendonorImport implements ToModel
{
    public function model(array $row)
    {
        return new Pendonor([
            'user' => $row[1],        
            'email' => $row[2],        
            'hp' => $row[3],        
            'nama' => $row[4],        
            'tgl_lahir' => $row[5],        
            'jk' => $row[6],        
            'alamat' => $row[7],        
            'goldarah' => $row[8],        
            'rhesus' => $row[9],        
            'ket' => $row[10]      
        ]);
    }
}