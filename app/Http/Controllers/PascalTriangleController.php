<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PascalTriangleController extends Controller
{
    //
    protected function pascal_triangle($row,$column){
        
        for ($y = 0; $y <= $row; $y ++){
            for ($x = 0; $x <= $y; $x ++){
              if($x == 0){
                $number[$y][$x] = 1; // start with 1
              }elseif($x == $y){
                $number[$y][$x] = 1; // end with 1
              }else{
                $number[$y][$x] = $number[$y-1][$x-1] + $number[$y-1][$x];
              }			
            }
          }

        return $number[$column][$row];
    }

    public function index(){
        $data = $this->pascal_triangle(0,2);
        // $print = '';
        // foreach($data as $row){
        //     $string = implode(' ',$row);
        //     $print .= $string.'<br>';

        // }
        return view('pascal_triangle', ['data' => $data]);
    }

    public function store(Request $request){
        $column = $request->column;
        $row = $request->row;

        $data = $this->pascal_triangle($row,$column);

        return redirect()
                ->route('view-pascal-triangle')
                ->with(
                        array(
                            'status' => 'successfully generate pascal triangle', 
                            'alert' => 'success',
                            'data' => $data
                        )
                    ); 
    }


    public function fresh_pascal_triangle(){
        $level = 5;
        for ($y = 0; $y <= $level; $y ++){
            for ($x = 0; $x <= $y; $x ++){
              if($x == 0){
                $number[$y][$x] = 1; // start with 1
              }elseif($x == $y){
                $number[$y][$x] = 1; // end with 1
              }else{
                $number[$y][$x] = $number[$y-1][$x-1] + $number[$y-1][$x];
              }			
            }
          }

        print_r($number);
    }
}
