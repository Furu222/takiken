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
 *  Layout
 *
 * @var string
 */
	public $layout = 'bootstrap';

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('TwitterBootstrap.BootstrapHtml', 'TwitterBootstrap.BootstrapForm', 'TwitterBootstrap.BootstrapPaginator');
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
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AnswerHistory->id = $id;
		if (!$this->AnswerHistory->exists()) {
			throw new NotFoundException(__('Invalid %s', __('answer history')));
		}
		$this->set('answerHistory', $this->AnswerHistory->read(null, $id));
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
				$this->Session->setFlash(
					__('The %s has been saved', __('answer history')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('answer history')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
		$users = $this->AnswerHistory->User->find('list');
		$problems = $this->AnswerHistory->Problem->find('list');
		$this->set(compact('users', 'problems'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->AnswerHistory->id = $id;
		if (!$this->AnswerHistory->exists()) {
			throw new NotFoundException(__('Invalid %s', __('answer history')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AnswerHistory->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('answer history')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('answer history')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->AnswerHistory->read(null, $id);
		}
		$users = $this->AnswerHistory->User->find('list');
		$problems = $this->AnswerHistory->Problem->find('list');
		$this->set(compact('users', 'problems'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->AnswerHistory->id = $id;
		if (!$this->AnswerHistory->exists()) {
			throw new NotFoundException(__('Invalid %s', __('answer history')));
		}
		if ($this->AnswerHistory->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('answer history')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('answer history')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}
