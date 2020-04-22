<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * NotificacionEmp Controller
 *
 * @property \App\Model\Table\NotificacionEmpTable $NotificacionEmp
 * @method \App\Model\Entity\NotificacionEmp[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NotificacionEmpController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $notificacionEmp = $this->paginate($this->NotificacionEmp);

        $this->set(compact('notificacionEmp'));
    }

    /**
     * View method
     *
     * @param string|null $id Notificacion Emp id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notificacionEmp = $this->NotificacionEmp->get($id, [
            'contain' => [],
        ]);

        $this->set('notificacionEmp', $notificacionEmp);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notificacionEmp = $this->NotificacionEmp->newEmptyEntity();
        if ($this->request->is('post')) {
            $notificacionEmp = $this->NotificacionEmp->patchEntity($notificacionEmp, $this->request->getData());
            if ($this->NotificacionEmp->save($notificacionEmp)) {
                $this->Flash->success(__('The notificacion emp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notificacion emp could not be saved. Please, try again.'));
        }
        $this->set(compact('notificacionEmp'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Notificacion Emp id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notificacionEmp = $this->NotificacionEmp->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notificacionEmp = $this->NotificacionEmp->patchEntity($notificacionEmp, $this->request->getData());
            if ($this->NotificacionEmp->save($notificacionEmp)) {
                $this->Flash->success(__('The notificacion emp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notificacion emp could not be saved. Please, try again.'));
        }
        $this->set(compact('notificacionEmp'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Notificacion Emp id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notificacionEmp = $this->NotificacionEmp->get($id);
        if ($this->NotificacionEmp->delete($notificacionEmp)) {
            $this->Flash->success(__('The notificacion emp has been deleted.'));
        } else {
            $this->Flash->error(__('The notificacion emp could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
