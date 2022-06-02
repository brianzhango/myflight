<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Airlines Controller
 *
 * @property \App\Model\Table\AirlinesTable $Airlines
 * @method \App\Model\Entity\Airline[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AirlinesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $airlines = $this->Airlines->find()->contain(['Countries']);

        $this->set(compact('airlines'));
    }

    /**
     * View method
     *
     * @param string|null $id Airline id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $airline = $this->Airlines->get($id, [
            'contain' => ['Countries', 'Flights']
        ]);

        $this->set(compact('airline'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $airline = $this->Airlines->newEmptyEntity();
        if ($this->request->is('post')) {
            $airline = $this->Airlines->patchEntity($airline, $this->request->getData());
            if ($this->Airlines->save($airline)) {
                $this->Flash->success(__('The airline has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The airline could not be saved. Please, try again.'));
        }
        $countries = $this->Airlines->Countries->find('list', ['limit' => 200])->all();
        $this->set(compact('airline', 'countries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Airline id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $airline = $this->Airlines->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $airline = $this->Airlines->patchEntity($airline, $this->request->getData());
            if ($this->Airlines->save($airline)) {
                $this->Flash->success(__('The airline has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The airline could not be saved. Please, try again.'));
        }
        $countries = $this->Airlines->Countries->find('list', ['limit' => 200])->all();
        $this->set(compact('airline', 'countries'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Airline id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $airline = $this->Airlines->get($id);
        if ($this->Airlines->delete($airline)) {
            $this->Flash->success(__('The airline has been deleted.'));
        } else {
            $this->Flash->error(__('The airline could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
