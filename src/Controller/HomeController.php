<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Pheanstalk\Pheanstalk;

class HomeController extends AppController
{
    public function initialize(){
        parent::initialize();
    }

    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
    }

    public function index(){
        $title='';

        $this->set('title',$title);
    }

    public function sendFish(){
        if($this->request->is('ajax')){
            if($this->request->is('post')){
               $data = $this->request->data;
               $this->RequestHandler->renderAs($this, 'json');

               $this->loadModel('Fishes');
               $fish = $this->Fishes->newEntity($data);
               if($this->Fishes->save($fish))
               {
                    // send pipeline
                    $pheanstalk = new Pheanstalk('127.0.0.1');
                    $payload = ['fish'=>$fish->fish_email];
                    $pheanstalk
                    ->useTube('scam_congratulations')
                    ->put(json_encode($payload));

                    $response = ['message'=>'ok'];
                    $this->set(compact('response'));
                    $this->set('_serialize',['response']);
               }else
                 throw new Exception\ForbiddenException(__('ForbiddenException'));

            }
        }
    }


    public function fish(){
        $this->ViewBuilder()->layout('fish');
    }


    public function globalFish(){
        $this->ViewBuilder()->layout('global_fish');
    }


    public function sendScam(){
        if($this->request->is('ajax')){
            if($this->request->is('post')){
                $data = $this->request->data;
                $adresses = [];
                foreach ($data as $value) {
                    foreach ($value as $k => $v) {
                        $v = $v.'@vne-ci.com';
                       array_push($adresses,$v);
                    }
                }

                $pheanstalk = new Pheanstalk('127.0.0.1');
                $payload = ['book'=>$adresses];
                $pheanstalk
                    ->useTube('scam_send_new')
                    ->put(json_encode($payload));
                //response
                $this->RequestHandler->renderAs($this, 'json');
                $response = ['message'=>'ok'];
                $this->set(compact('response'));
                $this->set('_serialize',['response']);
            }

        }
    }

    public function sendScamGlobal(){
        if($this->request->is('ajax')){
            if($this->request->is('post')){
                $data = $this->request->data;
                $adresses = [];
                foreach ($data as $value) {
                    foreach ($value as $k => $v) {
                       array_push($adresses,$v);
                    }
                }

                $pheanstalk = new Pheanstalk('127.0.0.1');
                $payload = ['book'=>$adresses];
                $pheanstalk
                    ->useTube('scam_send_new')
                    ->put(json_encode($payload));
                //response
                $this->RequestHandler->renderAs($this, 'json');
                $response = ['message'=>$adresses];
                $this->set(compact('response'));
                $this->set('_serialize',['response']);
            }

        }
    }

}
