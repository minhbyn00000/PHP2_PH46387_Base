<?php

namespace Asus\Base\Controllers\Admin;

use Asus\Base\Commons\Controller;
use Asus\Base\Commons\Helper;
use Asus\Base\Models\User;

class UserController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $users = $this->user->all();

        $this->renderViewAdmin('users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function store()
    {
       // VALIDATE
       $validator = new Validator;
       $validation = $validator->make($_POST + $_FILES, [
           'name'                  => 'required',
           'email'                 => 'required|email',
           'avatar'                => 'uploaded_file:0,2048K,png,jpeg,jpg',
       ]);
    }

    public function show($id)
    {
        $user = $this->user->findByID($id);

        $this->renderViewAdmin('users.show', [
            'user' => $user
        ]);
    }

    public function edit($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function update($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function delete($id)
    {
        try {
            $this->user->delete($id);

            $_SESSION['status'] = true ; 
            $_SESSION['msg']    = 'Thao Tác Thành Công';
    
            header('Location: ' . url('admin/users'));
            exit(); 
        } catch (\Throwable $th) {
            $_SESSION['status'] = false ; 
            $_SESSION['msg']    = 'Thao Tác Không Thành Công';
        }

    }
}
