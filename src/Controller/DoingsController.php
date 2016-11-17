<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Doings Controller
 *
 * @property \App\Model\Table\DoingsTable $Doings
 */
class DoingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $doings = $this->paginate($this->Doings);

        $this->set(compact('doings'));
        $this->set('_serialize', ['doings']);
    }

    /**
     * View method
     *
     * @param string|null $id Doing id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $doing = $this->Doings->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('doing', $doing);
        $this->set('_serialize', ['doing']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $doing = $this->Doings->newEntity();
        if ($this->request->is('post')) {
            $doing = $this->Doings->patchEntity($doing, $this->request->data);
            if ($this->Doings->save($doing)) {
                $this->Flash->success(__('The doing has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The doing could not be saved. Please, try again.'));
            }
        }
        $users = $this->Doings->Users->find('list', ['limit' => 200]);
        $this->set(compact('doing', 'users'));
        $this->set('_serialize', ['doing']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Doing id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $doing = $this->Doings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doing = $this->Doings->patchEntity($doing, $this->request->data);
            if ($this->Doings->save($doing)) {
                $this->Flash->success(__('The doing has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The doing could not be saved. Please, try again.'));
            }
        }
        $users = $this->Doings->Users->find('list', ['limit' => 200]);
        $this->set(compact('doing', 'users'));
        $this->set('_serialize', ['doing']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Doing id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $doing = $this->Doings->get($id);
        if ($this->Doings->delete($doing)) {
            $this->Flash->success(__('The doing has been deleted.'));
        } else {
            $this->Flash->error(__('The doing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
