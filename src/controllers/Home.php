<?php
namespace src\controllers;

use src\classes\Flash;
use src\database\models\User;
    
class Home extends Base {

    private $user;

    public function __construct(){
        $this->user = new User();
    }

    public function index($request, $response)
    {
        $users = $this->user->find();
        $userFind = $this->user->findBy('txlogin', 'Afonso');

        // $created = $this->user->create([
        //     'id' => '19',
        //     'txlogin' => 'Adrian',
        //     'txpassword' => '123456',
        //     'fkusertype' => '1',
        //     'fkstatus' => '1',
        //     'createdat' => '2021-01-24',
        //     'updatedat' => '2021-01-24'
        // ]);

        // $updated = $this->user->update([
        //     'fields' => [
        //         'txlogin' => 'Adrian',
        //         'txpassword' => '123456',
        //         'fkusertype' => '1',
        //         'fkstatus' => '1',
        //         'createdat' => '2021-01-24',
        //         'updatedat' => '2021-01-24'
        //     ],
        //     'where' => [
        //         'id' => '7'
        //     ]
        // ]);

        //$deleted = $this->user->delete('id', 19);

        Flash::set('message', 'Cadastro efetuado com sucesso');
        $message = Flash::get('message');

        return $this->getTwig()->render($response, $this->setView('site/home'), [
            'titlePage' => 'Sisger - Home',
            'users' => $users,
            'message' => $message
        ]);
    }

}
    

    