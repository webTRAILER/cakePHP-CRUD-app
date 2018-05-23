<?php

class UsersController extends AppController {
    //public $helpers = array('Html', 'Form');
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
    public function index() {
        
    }

    public function readall(){

    	$this->set('users', $this->User->find('all'));

    }

    public function add() {
        if ($this->request->is('post')) {
             $data=array('Id'=>$this->request->data["User"]["roll no"],
            	'Name'=>$this->request->data["User"]["name"],
            	'Email'=>$this->request->data["User"]["email"]);
            
            if ($this->User->save($data)) {
                
              
                $this->redirect( array('action'=>'index'));
            } else {
                
                
            }
        }
    }
    public function update($id = null) {
    if (!$id) {
            throw new NotFoundException(__('Invalid user'));
          }
    $user = $this->User->findById($id);
    if (!$user) {
        throw new NotFoundException(__('Invalid user'));
      }
    if ($this->request->is('post') || $this->request->is('put')) {
        $this->User->id = $id;
        
        $data=array('Id'=>$this->request->data["User"]["RollNo"],
            	'Name'=>$this->request->data["User"]["Name"],
            	'Email'=>$this->request->data["User"]["Email"]);

        if ($this->User->save($data)) {
            //$this->Session->setFlash(__('Student has been updated.'));
            $this->redirect(array('action' => 'index'));
        } else {
            //$this->Session->setFlash(__('Unable to update Student.'));
        }
     }
    if (!$this->request->data) {
        $this->request->data = $user;
     }
 }

 public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }
  if ($this->User->delete($id)) {
        //$this->Session->setFlash(__('The Student having id: %s has been deleted.', $id));
        $this->redirect(array('action' => 'readall'));
    }
 }
}
 ?>