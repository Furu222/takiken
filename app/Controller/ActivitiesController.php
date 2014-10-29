<?php
App::uses('AppController', 'Controller');
/**
 * Activities Controller
 *
 * @property Activity $Activity
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ActivitiesController extends AppController {

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
		$this->Activity->recursive = 0;
		$this->set('activities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Activity->id = $id;
		if (!$this->Activity->exists()) {
			throw new NotFoundException(__('Invalid %s', __('activity')));
		}
		$this->set('activity', $this->Activity->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Activity->create();
			if ($this->Activity->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('activity')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('activity')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
		$users = $this->Activity->User->find('list');
		$problems = $this->Activity->Problem->find('list');
		$this->set(compact('users', 'problems'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Activity->id = $id;
		if (!$this->Activity->exists()) {
			throw new NotFoundException(__('Invalid %s', __('activity')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Activity->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('activity')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('activity')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->Activity->read(null, $id);
		}
		$users = $this->Activity->User->find('list');
		$problems = $this->Activity->Problem->find('list');
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
		$this->Activity->id = $id;
		if (!$this->Activity->exists()) {
			throw new NotFoundException(__('Invalid %s', __('activity')));
		}
		if ($this->Activity->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('activity')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('activity')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}
