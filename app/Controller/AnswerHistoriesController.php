<?php
App::uses('AppController', 'Controller');
/**
 * AnswerHistories Controller
 *
 * @property AnswerHistory $AnswerHistory
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AnswerHistoriesController extends AppController {

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
		$this->AnswerHistory->recursive = 0;
		$this->set('answerHistories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AnswerHistory->exists($id)) {
			throw new NotFoundException(__('Invalid answer history'));
		}
		$options = array('conditions' => array('AnswerHistory.' . $this->AnswerHistory->primaryKey => $id));
		$this->set('answerHistory', $this->AnswerHistory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AnswerHistory->create();
			if ($this->AnswerHistory->save($this->request->data)) {
				$this->Session->setFlash(__('The answer history has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answer history could not be saved. Please, try again.'));
			}
		}
		$users = $this->AnswerHistory->User->find('list');
		$problems = $this->AnswerHistory->Problem->find('list');
		$this->set(compact('users', 'problems'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AnswerHistory->exists($id)) {
			throw new NotFoundException(__('Invalid answer history'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AnswerHistory->save($this->request->data)) {
				$this->Session->setFlash(__('The answer history has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answer history could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AnswerHistory.' . $this->AnswerHistory->primaryKey => $id));
			$this->request->data = $this->AnswerHistory->find('first', $options);
		}
		$users = $this->AnswerHistory->User->find('list');
		$problems = $this->AnswerHistory->Problem->find('list');
		$this->set(compact('users', 'problems'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AnswerHistory->id = $id;
		if (!$this->AnswerHistory->exists()) {
			throw new NotFoundException(__('Invalid answer history'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AnswerHistory->delete()) {
			$this->Session->setFlash(__('The answer history has been deleted.'));
		} else {
			$this->Session->setFlash(__('The answer history could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
