<?php
App::uses('AppController', 'Controller');
/**
 * Problems Controller
 *
 * @property Problem $Problem
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ProblemsController extends AppController {

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
		$this->Problem->recursive = 0;
		$this->set('problems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Problem->id = $id;
		if (!$this->Problem->exists()) {
			throw new NotFoundException(__('Invalid %s', __('problem')));
		}
		$this->set('problem', $this->Problem->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Problem->create();
               debug($this->request);
			if ($this->Problem->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('problem')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('problem')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
		$categories = $this->Problem->Category->find('list');
		$users = $this->Problem->User->find('list');
		$this->set(compact('categories', 'users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Problem->id = $id;
		if (!$this->Problem->exists()) {
			throw new NotFoundException(__('Invalid %s', __('problem')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Problem->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('problem')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('problem')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->Problem->read(null, $id);
		}
		$categories = $this->Problem->Category->find('list');
		$users = $this->Problem->User->find('list');
		$this->set(compact('categories', 'users'));
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
		$this->Problem->id = $id;
		if (!$this->Problem->exists()) {
			throw new NotFoundException(__('Invalid %s', __('problem')));
		}
		if ($this->Problem->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('problem')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('problem')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

/**
 * answer method
 *
 * @param string $id
 * @return void
 * @omega999 create
 */
	public function answer() {
		//if (!$this->request->is('post')) {
		//	throw new MethodNotAllowedException();
		//}
		//$this->Problem->id = $id;
		//if (!$this->Problem->exists()) {
		//	throw new NotFoundException(__('Invalid %s', __('problem')));
		//}
		//$this->Session->setFlash(
		//	__('The %s was not deleted', __('problem')),
		//	'alert',
		//	array(
		//		'plugin' => 'TwitterBootstrap',
		//		'class' => 'alert-error'
		//	)
		//);
		//$this->redirect(array('action' => 'index'));
	}
}
