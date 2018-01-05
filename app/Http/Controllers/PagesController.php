<?php

namespace App\Http\Controllers;

use App\Employee;
use App\PageNames;
use App\RankCategory;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function page_root() {
        return "/";
    }

    /** Basic Information */

    public function basicInformation() {
        $rankCategories = RankCategory::get();
        $id             = isset($_GET['employee_id'])? $_GET['employee_id'] : 0;

        if(!$id) {
            return view('pages.basic-information-create')->with(['rankCategories' => $rankCategories, 'pageNumber' => 0]);
        }

        $employee = Employee::find($id);

        $params = [
            'rankCategories'    => $rankCategories,
            'employee'          => $employee,
            'pageNumber'        => 0
        ];

        return view('pages.basic-information-edit')->with($params);
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
        return redirect( PageNames::page(1) . '?employee_id=1');
    }
    /** Basic Information End */


    /** I - V */
    public function educationalAttainment(){
        $params = [
            'pageNumber'        => 1
        ];
        return view( PageNames::pageFile(1) )->with($params);
    }

    public function workExperience(){
        $params = [
            'pageNumber'        => 2
        ];
        return view( PageNames::pageFile(2) )->with($params);
    }

    public function productivity(){
        $params = [
            'pageNumber'        => 3
        ];
        return view( PageNames::pageFile(3) )->with($params);
    }

    public function teachingEfficiencyRating(){
        $params = [
            'pageNumber'        => 4
        ];
        return view( PageNames::pageFile(4) )->with($params);
    }

    public function professionalGrowth(){
        $params = [
            'pageNumber'        => 5
        ];
        return view( PageNames::pageFile(5) )->with($params);
    }

    /** I - V end */



    /** VI to VII **/
    public function extraAcademicActivities()
    {
        $params = [
            'pageNumber'        => 6
        ];
        return view( PageNames::pageFile(6) )->with($params);
    }

    public function extensionServices()
    {
        $params = [
            'pageNumber'        => 1
        ];
        return view( PageNames::pageFile(7) )->with($params);
    }

    /** End VI to VII **/
}
