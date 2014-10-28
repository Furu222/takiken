<?php
App::uses('AppController', 'Controller');
/**
 * UserPoints Controller
 *
 * @property UserPoint $UserPoint
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UserPointsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserPoint->recursive = 0;
		$this->set('userPoints', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserPoint->exists($id)) {
			throw new NotFoundException(__('Invalid user point'));
		}
		$options = array('conditions' => array('UserPoint.' . $this->UserPoint->primaryKey => $id));
		$this->set('userPoint', $this->UserPoint->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserPoint->create();
			if ($this->UserPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The user point has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user point could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserPoint->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserPoint->exists($id)) {
			throw new NotFoundException(__('Invalid user point'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The user point has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user point could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserPoint.' . $this->UserPoint->primaryKey => $id));
			$this->request->data = $this->UserPoint->find('first', $options);
		}
		$users = $this->UserPoint->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserPoint->id = $id;
		if (!$this->UserPoint->exists()) {
			throw new NotFoundException(__('Invalid user point'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserPoint->delete()) {
			$this->Session->setFlash(__('The user point has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user point could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
