<?php

declare(strict_types=1);

namespace App\Controller;
require ROOT.'/vendor/autoload.php';
use Cake\Http\Session\DatabaseSession;

/**
 * Users Controller
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $users = $this->paginate($this->Users->find('all', [
            'contain' => ['Agenda'],
        ]));
        $this->set(compact('users'));
    }

    /**
     * Login method
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function login()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                if ($this->Auth->authenticationProvider()->needsPasswordRehash()) {
                    $user = $this->Users->get($this->Auth->user('id'));
                    $user->password = $this->request->getData('password');
                    $this->Users->save($user);
                }
                return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
            } else {
                $this->Flash->error('Usuario o contraseña incorrecta', ['clear' => true]);
                return $this->redirect(['action' => 'login']);
            }
        }
        $this->set('user', $user);
    }
    /**
     * Logout Method
     */
    public function logout()
    {
        $this->Auth->logout();
        return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function createUser()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user->nombre = $this->request->getData('nombre');
            $user->apellido = $this->request->getData('apellido');
            $user->mail = $this->request->getData('mail');
            $user->password = $this->request->getData('password');
            $user->cedula = $this->request->getData('cedula');
            $user->tip_usu = '2';
            $bool = $this->Users->find()->where(['mail' => $this->request->getData('mail')]);
            if ($bool->isEmpty()) {
                if ($this->Users->save($user)) {
                    $this->Auth->setUser($user);
                    $this->Flash->success(__('El usuario ha sido creado exitosamente'), ['clear' => true]);
                    return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
                } else {
                    $this->Flash->error(__('The user could not be saved. Please, try again.'), ['clear' => true]);
                }
            } else {
                $this->Flash->error('Existe un usuario con ese Email', ['clear' => true]);
            }
        }
        $this->set(compact('user'));
        $this->render('/Users/create');
    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function account()
    {
        $users = $this->Users->get($this->Auth->user('id'), [
            'contain' => [],
        ]);
        $this->viewBuilder()->setLayout('user');
        $this->set(compact('users'));
        $this->render('/Users/account');
    }
    public function change()
    {
        $users = $this->Users->get($this->Auth->user('id'), [
            'contain' => [],
        ]);
        if ($this->request->is('post')) {
            $session = $this->getRequest()->getSession();
            if ($this->request->getData('key')==$session->read('unique')) {
                $users->password = $this->request->getData('pass');
                if ($this->Users->save($users)) {
                    $this->Flash->success('Contraseña Cambiada');
                    $this->Auth->logout();
                    return $this->redirect(['action' => 'login']);
                } else {
                    # code...
                }
                
            } else {
                $this->Flash->error('fuck u');
                return $this->redirect($this->referer());
            }
            
        }
        $this->set(compact('users'));
        $this->render('/Users/change');
    }
    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bool = $this->Users->find()->where(['mail' => $this->request->getData('mail')]);
           if ($user->mail == $this->request->getData('mail') || $bool->isEmpty()) {
                $user->nombre = $this->request->getData('nombre');
                $user->apellido = $this->request->getData('apellido');
                $user->cedula = $this->request->getData('cedula');
                $user->mail = $this->request->getData('mail');
                if ($this->Users->save($user)) {
                    $this->Flash->success('Los datos se han actualizado', ['clear' => true]);
                    $this->redirect($this->referer());
                } else {
                    $this->Flash->error('Algo va mal', ['clear' => true]);
                    $this->redirect($this->referer());
                }
           } else {
                $this->Flash->error('Existe un usuario con ese Email', ['clear' => true]);
                $this->redirect($this->referer());
           }
           
        }
        $this->set(compact('user'));
    }
    public function unique()
    {
        $this->loadComponent('Email');
        $unique = uniqid();
        $session = $this->getRequest()->getSession();
        $session->write('unique',$unique);
        $to = $this->Auth->user('mail');
        $subject = 'Buenas, Cambio de password';
        $message = 'Nothing much. Just test out my Email Component using PHPMailer.<br/>';
        $message .= "<h3>$unique</h3>";
        try {
            $mail = $this->Email->send_mail($to, $subject, $message);
            return $this->redirect(['action'=>'change']);
        } catch (\Throwable $th) {
            
        }
    }
}
