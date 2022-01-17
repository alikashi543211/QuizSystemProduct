<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Question;
use App\Models\Option;
use App\Models\CorrectOption;

class McqController extends Controller
{
    public function list()
    {
        $mcq_list = Question::where('type', '1')
            ->orderBy('id', 'desc')
            ->get();
        return view("admin.mcq.list", get_defined_vars());
    }

    public function add()
    {
        return view("admin.mcq.add", get_defined_vars());
    }

    public function edit($id)
    {
        return view("admin.mcq.edit", get_defined_vars());
    }

    public function save($id = null, Request $req)
    {
        try
        {
            // Check MCQ Question Already Exist
            $q_count = Question::where('type', '1')
                ->where('question', 'LIKE', $req->question)
                ->count();
            if($q_count > 0)
            {
                $data = ['result' => false, "success" => "", "error" => "MCQ Already Exist"];
                return response()->json($data);
            }

            // Add MCQ Question
            $ques = new Question();
            $ques->question = $req->question;
            $ques->save();

            // Add Options
            if(isset($req->option))
            {
                if(sizeof($req->option) > 0)
                {
                    foreach($req->option as $option)
                    {
                        $op = new Option();
                        $op->question_id = $ques->id;
                        $op->option = $option;
                        $op->save();
                        if($option == $req->correct_option)
                        {
                            $cop_id = $op->id;
                        }
                    }
                }
            }
            
            // Add Correct Option
            $cop = new CorrectOption();
            $cop->question_id = $ques->id;
            $cop->option_id = $cop_id;
            $cop->save();

            $data = ['result' => true, "success" => 'MCQ Added Successfully', 'error' => ''];
            return response()->json($data);
        }catch(\Exception $e)
        {
            $data = ['result' => false, "success" => "", "error" => $e->getMessage()];
            return response()->json($data);
        }
        
        
        
    }

    public function delete($id)
    {
        dd($id);
    }
}
