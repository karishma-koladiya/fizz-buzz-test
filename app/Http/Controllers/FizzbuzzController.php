<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FizzbuzzController extends Controller
{
    public function printData(){
    	$array_print = [];
    	for ($num=1; $num < 101; $num++) { 
    		if(($num % 15) == 0){
    			$array_print[] = "FizzBuzz";
    		}else if(($num % 3) == 0){
    			$array_print[] = "Fizz";
    		}
    		else if(($num % 5) == 0){
    			$array_print[] = "Buzz";
    		}else{
    			$array_print[] = $num;
    		}
    	}
    	return response()->json(['success'=>true,'data'=>implode(',',$array_print)]);
    	dd($array_print);
    }
}
