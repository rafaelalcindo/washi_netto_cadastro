<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Desbravador Controller
 *
 * @property \App\Model\Table\DesbravadorTable $Desbravador
 *
 * @method \App\Model\Entity\Desbravador[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DesbravadorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Unidades']
        ];
        $desbravador = $this->paginate($this->Desbravador);

        $this->set(compact('desbravador'));
    }

    /**
     * View method
     *
     * @param string|null $id Desbravador id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $desbravador = $this->Desbravador->get($id, [
            'contain' => ['Unidades']
        ]);

        $this->set('desbravador', $desbravador);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $desbravador = $this->Desbravador->newEntity();
        if ($this->request->is('post')) {
            $desbravador = $this->Desbravador->patchEntity($desbravador, $this->request->getData());
            if ($this->Desbravador->save($desbravador)) {
                $this->Flash->success(__('The desbravador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The desbravador could not be saved. Please, try again.'));
        }
        $unidades = $this->Desbravador->Unidades->find('list', ['limit' => 200]);
        $this->set(compact('desbravador', 'unidades'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Desbravador id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $desbravador = $this->Desbravador->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $desbravador = $this->Desbravador->patchEntity($desbravador, $this->request->getData());
            if ($this->Desbravador->save($desbravador)) {
                $this->Flash->success(__('The desbravador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The desbravador could not be saved. Please, try again.'));
        }
        $unidades = $this->Desbravador->Unidades->find('list', ['limit' => 200]);
        $this->set(compact('desbravador', 'unidades'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Desbravador id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $desbravador = $this->Desbravador->get($id);
        if ($this->Desbravador->delete($desbravador)) {
            $this->Flash->success(__('The desbravador has been deleted.'));
        } else {
            $this->Flash->error(__('The desbravador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
