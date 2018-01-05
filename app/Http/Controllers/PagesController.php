<?php

namespace App\Http\Controllers;

use App\Employee;
use App\RankCategory;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function page_root() {
        return "/";
    }

    public function basicInformation() {
        $rankCategories = RankCategory::get();
        $id             = isset($_GET['employee_id'])? $_GET['employee_id'] : 0;

        if(!$id) {
            return view('pages.basic-information-create')->with(['rankCategories' => $rankCategories]);
        }

        $employee = Employee::find($id);
        return view('pages.basic-information-edit')->with(['rankCategories' => $rankCategories, 'employee' => $employee]);
    }

    public function basicInformationCreate(Request $request) {
        $evaluation_date    = strip_tags( $request->input('evaluation_date') );
        $faculty_id         = strip_tags( $request->input('faculty_id') );
        $full_name          = strip_tags( $request->input('full_name') );
        $hea                = strip_tags( $request->input('hea') );
        $specialization     = strip_tags( $request->input('specialization') );
        $college            = strip_tags( $request->input('college') );
        $department         = strip_tags( $request->input('department') );
        $current_rank       = strip_tags( $request->input('current_rank') );
        $for_rank           = strip_tags( $request->input('for_rank') );

        $employee_id        = Employee::insertGetId([
                'eval_date'         => $evaluation_date,
                'faculty_id'        => $faculty_id,
                'faculty_name'      => $full_name,
                'highest_educational_attainment' => $hea,
                'specialization'    => $specialization,
                'college'           => $college,
                'department'        => $department,
                'current_rank'      => $current_rank,
                'for_rank_category_id'  => $for_rank
            ]);
        return redirect( $this->page_root() . '?employee_id=1');
    }

    /** VI to VII **/
    
    public function getExtraAcademicActivities()
    {
   
        return view('pages.extra-academic');  
    }

    public function postExtraAcademicActivities()
    {
        //  return view
        //  enable sessions / set
    }

    /** End VI to VII **/
}
