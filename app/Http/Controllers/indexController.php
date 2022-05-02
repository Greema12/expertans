<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use DB;
use App\Question_1;
use App\Questions_1;
// use App\Models\Index;



class indexController extends Controller
{
    //

    

public function index()
    	   {
        
           
            
         $que = DB::table('questions_1')->paginate(3);

        return view('Layout.index',compact('que'));
        }
        


public function blogdetail($id  )

		{
			 

			$que = DB::table('questions_1')->where('id',$id)->get();

			return view ('Blog.blogdetail' , compact('que'  ));

		}
public function blogdetails($id  )

        {
          

            $que = DB::table('questions_1')->where('id',$id)->get();

            return view ('Blog.blogdetail' , compact('que'  ));

        }

public function getSearch(Request $request)
    {
        $keyword = $request->input('keyword');
        $questions_1 = Question_1::all();

         if($keyword != "" )
         {
      
      
        return view('Blog.search')
            ->with('que', Question_1::where('main_que', 'LIKE', '%'.$keyword .'%')->paginate(3))
            ->with('keyword' ,$keyword)
            ->with('questions_1' , $questions_1);
        }
        // else {
        //       return view('Blog.search')->with('message' ,'No Found Data') ;

        // } 
 

    
    }

        

      
}


