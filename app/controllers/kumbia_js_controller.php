<?php

class KumbiaJsController extends AppController
{

    public function index()
    {
    }

    public function dependent_select()
    {
        $this->data = Countries::all();
    }

    public function get($model, $id)
    {
        if (!in_array($model, ['regions', 'cities'])) {
            throw new KumbiaException('');
        }
     
        View::select(null, 'json');
        $model = ucfirst($model);
        $this->data = $model::formSelect((int) $id);
    }
}
