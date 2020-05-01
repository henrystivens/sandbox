<?php

class KumbiaJsController extends AppController
{

    public function before_filter()
    {
        //It can also be located in initialize() of the parent controller 
        if (Input::isAjax()) {
            View::template(null);
        }
    }

    public function index()
    {
    }

    public function dependent_select()
    {
    }

    public function getRegions($id)
    {
        $this->countryId = $id;
    }

    public function getCities($id)
    {
        $this->regionId = $id;
    }
}
