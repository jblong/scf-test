<?php
class ProjectsController extends AppController {
  public $helpers = array('Html', 'Form', 'Session');

  public function index() {
    $this->set('projects', $this->Project->find('all'));
  }
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid project'));
        }

        $project = $this->Project->findById($id);
        if (!$project) {
            throw new NotFoundException(__('Invalid project'));
        }
        $this->set('project', $project);
    }
    public function add() {
        if ($this->request->is('post')) {
            $this->Project->create();
            if ($this->Project->save($this->request->data)) {
                $this->Session->setFlash('Your project has been saved.');
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash('Unable to add your project.');
        }
    }

public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid project'));
    }

    $project = $this->Project->findById($id);
    if (!$project) {
        throw new NotFoundException(__('Invalid project'));
    }

    if ($this->request->is('project') || $this->request->is('put')) {
        $this->Project->id = $id;
        if ($this->Project->save($this->request->data)) {
            $this->Session->setFlash('Your project has been updated.');
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash('Unable to update your project.');
    }

    if (!$this->request->data) {
        $this->request->data = $project;
    }
}
public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Project->delete($id)) {
        $this->Session->setFlash('The project with id: %s has been deleted.', h($id));
        return $this->redirect(array('action' => 'index'));
    }
}

}

?>
