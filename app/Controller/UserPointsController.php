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
		$this->UserPoint->recursive = 0;
		$this->set('userPoints', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->UserPoint->id = $id;
		if (!$this->UserPoint->exists()) {
			throw new NotFoundException(__('Invalid %s', __('user point')));
		}
		$this->set('userPoint', $this->UserPoint->read(null, $id));
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
				$this->Session->setFlash(
					__('The %s has been saved', __('user point')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('user point')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
		$users = $this->UserPoint->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->UserPoint->id = $id;
		if (!$this->UserPoint->exists()) {
			throw new NotFoundException(__('Invalid %s', __('user point')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UserPoint->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('user point')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('user point')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->UserPoint->read(null, $id);
		}
		$users = $this->UserPoint->User->find('list');
		$this->set(compact('users'));
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
		$this->UserPoint->id = $id;
		if (!$this->UserPoint->exists()) {
			throw new NotFoundException(__('Invalid %s', __('user point')));
		}
		if ($this->UserPoint->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('user point')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('user point')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}
