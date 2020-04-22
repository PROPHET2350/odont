<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TipoUsuario Controller
 *
 * @property \App\Model\Table\TipoUsuarioTable $TipoUsuario
 * @method \App\Model\Entity\TipoUsuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoUsuarioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipoUsuario = $this->paginate($this->TipoUsuario);

        $this->set(compact('tipoUsuario'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Usuario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoUsuario = $this->TipoUsuario->get($id, [
            'contain' => [],
        ]);

        $this->set('tipoUsuario', $tipoUsuario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoUsuario = $this->TipoUsuario->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipoUsuario = $this->TipoUsuario->patchEntity($tipoUsuario, $this->request->getData());
            if ($this->TipoUsuario->save($tipoUsuario)) {
                $this->Flash->success(__('The tipo usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoUsuario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Usuario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoUsuario = $this->TipoUsuario->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoUsuario = $this->TipoUsuario->patchEntity($tipoUsuario, $this->request->getData());
            if ($this->TipoUsuario->save($tipoUsuario)) {
                $this->Flash->success(__('The tipo usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoUsuario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Usuario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoUsuario = $this->TipoUsuario->get($id);
        if ($this->TipoUsuario->delete($tipoUsuario)) {
            $this->Flash->success(__('The tipo usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
