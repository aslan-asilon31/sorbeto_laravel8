<?php

namespace App\Helpers;
use App\Models\User;

class HistoryLog {

    public function getUpdatedField_History($modul, $table, $id, $where, $new_data){
        return 'tess getUpdatedField_History';
    }
    public static function helperfunction1(){
        return "helper function 1 response";
    }

    public static function getEmployeeStatus($id=0){
        $record = User::find($id);

        return $record->status;
    }
}