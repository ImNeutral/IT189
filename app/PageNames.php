<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageNames extends Model
{
    public static function page($pageNumber = 0){
        $pageName = "";
        if($pageNumber == 0) {
            $pageName = "basic-information";
        } else if($pageNumber == 1) {
            $pageName = "educational-attainment";
        } else if ($pageNumber == 2) {
            $pageName = "work-experience";
        } else if ($pageNumber == 3) {
            $pageName = "productivity";
        } else if ($pageNumber == 4) {
            $pageName = "teaching-efficiency-rating";
        } else if ($pageNumber == 5) {
            $pageName = "professional-growth";
        } else if ($pageNumber == 6) {
            $pageName = "extra-academic-activities";
        } else if ($pageNumber == 7) {
            $pageName = "extension-services";
        }

        return $pageName;
    }

    public static function pageFile($pageNumber = 0) {
        return "pages." . self::page($pageNumber) . "-create";
    }

}
