<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Agenda2 Controller
 *
 * @property \App\Model\Table\Agenda2Table $Agenda2
 * @method \App\Model\Entity\Agenda2[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class Agenda2Controller extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $agenda2 = $this->paginate($this->Agenda2);

        $this->set(compact('agenda2'));
    }

    /**
     * View method
     *
     * @param string|null $id Agenda2 id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agenda2 = $this->Agenda2->get($id, [
            'contain' => [],
        ]);

        $this->set('agenda2', $agenda2);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agenda2 = $this->Agenda2->newEmptyEntity();
        if ($this->request->is('post')) {
            $agenda2 = $this->Agenda2->patchEntity($agenda2, $this->request->getData());
            if ($this->Agenda2->save($agenda2)) {
                $this->Flash->success(__('The agenda2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agenda2 could not be saved. Please, try again.'));
        }
        $this->set(compact('agenda2'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Agenda2 id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agenda2 = $this->Agenda2->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agenda2 = $this->Agenda2->patchEntity($agenda2, $this->request->getData());
            if ($this->Agenda2->save($agenda2)) {
                $this->Flash->success(__('The agenda2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agenda2 could not be saved. Please, try again.'));
        }
        $this->set(compact('agenda2'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agenda2 id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agenda2 = $this->Agenda2->get($id);
        if ($this->Agenda2->delete($agenda2)) {
            $this->Flash->success(__('The agenda2 has been deleted.'));
        } else {
            $this->Flash->error(__('The agenda2 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
