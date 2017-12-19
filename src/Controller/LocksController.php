<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Locks Controller
 *
 * @property \App\Model\Table\LocksTable $Locks
 *
 * @method \App\Model\Entity\Lock[] paginate($object = null, array $settings = [])
 */
class LocksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $locks = $this->paginate($this->Locks);

        $this->set(compact('locks'));
        $this->set('_serialize', ['locks']);
    }

    /**
     * View method
     *
     * @param string|null $id Lock id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lock = $this->Locks->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('lock', $lock);
        $this->set('_serialize', ['lock']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lock = $this->Locks->newEntity();
        if ($this->request->is('post')) {
            $lock = $this->Locks->patchEntity($lock, $this->request->getData());
            if ($this->Locks->save($lock)) {
                $this->Flash->success(__('The lock has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lock could not be saved. Please, try again.'));
        }
        $this->set(compact('lock'));
        $this->set('_serialize', ['lock']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lock id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lock = $this->Locks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lock = $this->Locks->patchEntity($lock, $this->request->getData());
            if ($this->Locks->save($lock)) {
                $this->Flash->success(__('The lock has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lock could not be saved. Please, try again.'));
        }
        $this->set(compact('lock'));
        $this->set('_serialize', ['lock']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lock id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lock = $this->Locks->get($id);
        if ($this->Locks->delete($lock)) {
            $this->Flash->success(__('The lock has been deleted.'));
        } else {
            $this->Flash->error(__('The lock could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
