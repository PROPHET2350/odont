<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Agenda Controller
 *
 * @property \App\Model\Table\AgendaTable $Agenda
 * @method \App\Model\Entity\Agenda[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AgendaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $agenda = $this->paginate($this->Agenda->find('all',[
            'contain' => ['Users'],
        ]));

        $this->set(compact('agenda'));
    }

    /**
     * View method
     *
     * @param string|null $id Agenda id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agenda = $this->Agenda->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('agenda', $agenda);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agenda = $this->Agenda->newEmptyEntity();
        if ($this->request->is('post')) {
            $agenda = $this->Agenda->patchEntity($agenda, $this->request->getData());
            if ($this->Agenda->save($agenda)) {
                $this->Flash->success(__('The agenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agenda could not be saved. Please, try again.'));
        }
        $this->set(compact('agenda'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Agenda id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agenda = $this->Agenda->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agenda = $this->Agenda->patchEntity($agenda, $this->request->getData());
            if ($this->Agenda->save($agenda)) {
                $this->Flash->success(__('The agenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agenda could not be saved. Please, try again.'));
        }
        $this->set(compact('agenda'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agenda id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agenda = $this->Agenda->get($id);
        if ($this->Agenda->delete($agenda)) {
            $this->Flash->success(__('The agenda has been deleted.'));
        } else {
            $this->Flash->error(__('The agenda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
