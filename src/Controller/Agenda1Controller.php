<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Agenda1 Controller
 *
 * @property \App\Model\Table\Agenda1Table $Agenda1
 * @method \App\Model\Entity\Agenda1[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class Agenda1Controller extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $agenda1 = $this->paginate($this->Agenda1);

        $this->set(compact('agenda1'));
    }

    /**
     * View method
     *
     * @param string|null $id Agenda1 id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agenda1 = $this->Agenda1->get($id, [
            'contain' => [],
        ]);

        $this->set('agenda1', $agenda1);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agenda1 = $this->Agenda1->newEmptyEntity();
        if ($this->request->is('post')) {
            $agenda1 = $this->Agenda1->patchEntity($agenda1, $this->request->getData());
            if ($this->Agenda1->save($agenda1)) {
                $this->Flash->success(__('The agenda1 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agenda1 could not be saved. Please, try again.'));
        }
        $this->set(compact('agenda1'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Agenda1 id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agenda1 = $this->Agenda1->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agenda1 = $this->Agenda1->patchEntity($agenda1, $this->request->getData());
            if ($this->Agenda1->save($agenda1)) {
                $this->Flash->success(__('The agenda1 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agenda1 could not be saved. Please, try again.'));
        }
        $this->set(compact('agenda1'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agenda1 id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agenda1 = $this->Agenda1->get($id);
        if ($this->Agenda1->delete($agenda1)) {
            $this->Flash->success(__('The agenda1 has been deleted.'));
        } else {
            $this->Flash->error(__('The agenda1 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
