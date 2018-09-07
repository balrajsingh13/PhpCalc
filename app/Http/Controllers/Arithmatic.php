<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Arithmatic extends Controller{

    public function values(Request $request){
        $val_a = $request->input('val1');
        $val_b = $request->input('val2');

        $operation = $request->input('action');
        //        print_r($request-> all()); die;

        switch($operation){
            case 'add': 
                $result = $val_a + $val_b;
                return view('result',compact('result'));
                break;
            
            case 'sub': 
                //if($val_a > $val_b){
                    $result = $val_a - $val_b;
                    return view('result',compact('result'));
                //}else{
                //    return view('result',function(){ alert("first value is smaller than second"); });
                //}
                break;
            
            case 'prod': 
                $result = $val_a * $val_b;
                return view('result',compact('result'));
                break;

            case 'div':
                //if($val_a > $val_b){
                    $result = $val_a / $val_b;
                    return view('result',compact('result'));
                //}
                break;

            default:
                echo "INPUT VALUES are WRONG";
        }
    }
}