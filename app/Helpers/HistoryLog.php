<?php

namespace App\Helpers;
use App\Models\HistoryLog as HistoryLogModel;
Use DB;
use Auth;

class HistoryLog {

    public function afterStore($data){
        if($data){
            return 'ada data';
        }else{
            return 'gada data';
        }

    }

    public function afterUpdate($data_new, $data_old, $module, $id, $table){

                
        // Check if data is not empty before accessing properties
        if (!empty($data_old)) {
            $data_old = $data_old[0]; // Access the first (and assumed only) row

            // Initialize an array to store changes
            $changes = [];

            // Compare each column and its value
            foreach ($data_new as $column => $value_new) {
                $value_old = $data_old->{$column};

                // Check if the values are different
                if ($value_new !== $value_old) {
                    // Log or handle the change (e.g., store in an array, log, etc.)
                    $changes[$column] = [
                        'old' => $value_old,
                        'new' => $value_new,
                    ];
                }

            }

            // dd($column.':'.$value_old.'#'.$value_new);

            // Create a HistoryLogModel entry for the changes
            if (!empty($changes)) {
                $historyLog = HistoryLogModel::create([
                    'module'  => $module,
                    'key_id'    => $id,
                    'txt'  => $column.':'.$value_old.'#'.$value_new,
                    'user_create'  => Auth::user() ? Auth::user()->name : ' ',
                    // 'txt'  => json_encode($changes),
                ]);
            }
            


            // return redirect()->route('user.list'); // Replace 'your.route.name' with your actual route name


        } else {
            // Handle the case when no data is found
            dd('No data found for the given user_id.');
        }
    

    }


}