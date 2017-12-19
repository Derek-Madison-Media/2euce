<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Actives Controller
 *
 * @property \App\Model\Table\ActivesTable $Actives
 *
 * @method \App\Model\Entity\Active[] paginate($object = null, array $settings = [])
 */
class ActivesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $actives = $this->paginate($this->Actives);

        $this->set(compact('actives'));
        $this->set('_serialize', ['actives']);
    }

    /**
     * View method
     *
     * @param string|null $id Active id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $active = $this->Actives->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('active', $active);
        $this->set('_serialize', ['active']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $active = $this->Actives->newEntity();
        if ($this->request->is('post')) {
            $active = $this->Actives->patchEntity($active, $this->request->getData());
            if ($this->Actives->save($active)) {
                $this->Flash->success(__('The active has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The active could not be saved. Please, try again.'));
        }
        $this->set(compact('active'));
        $this->set('_serialize', ['active']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Active id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $active = $this->Actives->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $active = $this->Actives->patchEntity($active, $this->request->getData());
            if ($this->Actives->save($active)) {
                $this->Flash->success(__('The active has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The active could not be saved. Please, try again.'));
        }
        $this->set(compact('active'));
        $this->set('_serialize', ['active']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Active id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $active = $this->Actives->get($id);
        if ($this->Actives->delete($active)) {
            $this->Flash->success(__('The active has been deleted.'));
        } else {
            $this->Flash->error(__('The active could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
