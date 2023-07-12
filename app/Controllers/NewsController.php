<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsModel;

class NewsController extends BaseController
{
    protected $news_model;

    public function __construct() {
        $this->news_model = new NewsModel();
    }

    public function index() {
        return view('index', [
            'news' => $this->news_model->paginate(6),
            'pager' => $this->news_model->pager
        ]);
    }

    public function viewDetail(){
        $id = $this->request->uri->getSegment(3);
        return view('view_detail_news', [
            'new' => $this->news_model->find($id)
        ]);
    }

    public function create(){
        return view('create_news');
    }

    public function delete(){
        $id = $this->request->uri->getSegment(3);
        $this->news_model->delete($id);
        return redirect()->to(base_url('news'));
    }

    public function edit(){
        $id = $this->request->uri->getSegment(3);
        return view('edit_news', [
            'new' => $this->news_model->find($id)
        ]);
    }

    public function store(){      

        $errors = $this->validation();

        if ($errors) {
            return redirect()->to(base_url('/news/create/'))->withInput()->with('errors', $errors);
        }

        $this->news_model->save([
            'title' => $this->request->getPost('title'),
            'author' => $this->request->getPost('author'),
            'content' => $this->request->getPost('content'),
            'publication_date' => date('Y-m-d')
        ]);

        return redirect()->to(base_url('news'));
    }

    public function update(){
        
        $id = $this->request->uri->getSegment(3);
        
        $errors = $this->validation();
        
        if ($errors) {
            return redirect()->to(base_url('/news/edit/'.$id))->withInput()->with('errors', $errors);
        }


        $this->news_model->update($id, [
            'title' => $this->request->getPost('title'),
            'author' => $this->request->getPost('author'),
            'content' => $this->request->getPost('content'),
            'publication_date' => date('Y-m-d')
        ]);

        return redirect()->to(base_url('news'));
    }

    function validation () {
        $validation =  \Config\Services::validation();

        $validation->setRules([
            'title' => 'required|min_length[3]|max_length[255]',
            'author' => 'required|min_length[3]|max_length[255]',
            'content' => 'required|min_length[3]|max_length[255]'
        ],[
            'title' => [
                'required' => 'O campo título é obrigatório',
                'min_length' => 'O campo título deve ter no mínimo 3 caracteres',
                'max_length' => 'O campo título deve ter no máximo 255 caracteres'
            ],
            'author' => [
                'required' => 'O campo autor é obrigatório',
                'min_length' => 'O campo autor deve ter no mínimo 3 caracteres',
                'max_length' => 'O campo autor deve ter no máximo 255 caracteres'
            ],
            'content' => [
                'required' => 'O campo conteúdo é obrigatório',
                'min_length' => 'O campo conteúdo deve ter no mínimo 3 caracteres',
                'max_length' => 'O campo conteúdo deve ter no máximo 255 caracteres'
            ]
        ]);

        $validation->withRequest($this->request)->run();

        return $validation->getErrors();
    }
}