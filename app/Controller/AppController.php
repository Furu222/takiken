<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */


App::uses('Controller', 'Controller');

//成功！

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $components = array(
        'DebugKit.Toolbar',
        'Session',
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'userModel' => 'User', // モデルの指定
                    'fields' => array('username' => 'username', 'password' => 'password')  // フィールドの指定
                )
            ),
            'loginAction' => array( // ログインアクションの指定
                'controller' => 'users',
                'action' => 'login',
            ),
            'authError' => 'ユーザ名とパスワードを入力してください。', // 未認証時のエラーメッセージ
            'loginRedirect' => array(
                'controller' => 'users', 
                'action' => 'index'
            ), // ログインした後のリダイレクト先をusers/indexに
            'logoutRedirect' => array(
                'controller' => 'pages', 
                'action' => 'display', 'home'
            ) // ログアウト時のリダイレクト先を/に設定
        )
    );
    public $helpers = array(
        'Session',
        'Html' => array('className' => 'TwitterBootstrap.BootstrapHtml'),
        'Form' => array('className' => 'TwitterBootstrap.BootstrapForm'),
        'Paginator' => array('className' => 'TwitterBootstrap.BootstrapPaginator'),
    );

    public function beforeFilter(){
        $this->Auth->allow('login', 'logout', 'add','index','view','answer');
    }
}
