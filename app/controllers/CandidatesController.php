<?php
use HireMe\Entities\Category;
class CandidatesController extends BaseController {

    protected $categoryRepo;

    public function __construct(CategoryRepo $categoryRepo)
    {
        $this->categoryRepo  =  $categoryRepo;
    }
    public function category($slug,$id)
    {
        $category = $this->categoryRepo->find($id);

        dd($category);
    }

}
