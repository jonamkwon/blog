<?php

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class ProductsController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for Products
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Products", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id desc";

        $Products = Products::find($parameters);
        if (count($Products) == 0) {
            $this->flash->notice("The search did not find any Products");

            return $this->dispatcher->forward(array(
                "controller" => "Products",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $Products,
            "limit"=> 10,
            "page" => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displayes the creation form
     */
    public function newAction()
    {

    }

    /**
     * Edits a Product
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $Product = Products::findFirstByid($id);
            if (!$Product) {
                $this->flash->error("Product was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "Products",
                    "action" => "index"
                ));
            }

            $this->view->id = $Product->id;

            $this->tag->setDefault("id", $Product->id);
            $this->tag->setDefault("products_types_id", $Product->products_types_id);
            $this->tag->setDefault("name", $Product->name);
            $this->tag->setDefault("price", $Product->price);
            $this->tag->setDefault("active", $Product->active);
            
        }
    }

    /**
     * Creates a new Product
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "Products",
                "action" => "index"
            ));
        }

        $Product = new Products();

        $Product->id = $this->request->getPost("id");
        $Product->products_types_id = $this->request->getPost("products_types_id");
        $Product->name = $this->request->getPost("name");
        $Product->price = $this->request->getPost("price");
        $Product->active = $this->request->getPost("active");
        

        if (!$Product->save()) {
            foreach ($Product->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "Products",
                "action" => "new"
            ));
        }

        $this->flash->success("Product was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "Products",
            "action" => "index"
        ));

    }

    /**
     * Saves a Product edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "Products",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $Product = Products::findFirstByid($id);
        if (!$Product) {
            $this->flash->error("Product does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "Products",
                "action" => "index"
            ));
        }

        $Product->id = $this->request->getPost("id");
        $Product->products_types_id = $this->request->getPost("products_types_id");
        $Product->name = $this->request->getPost("name");
        $Product->price = $this->request->getPost("price");
        $Product->active = $this->request->getPost("active");
        

        if (!$Product->save()) {

            foreach ($Product->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "Products",
                "action" => "edit",
                "params" => array($Product->id)
            ));
        }

        $this->flash->success("Product was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "Products",
            "action" => "index"
        ));

    }

    /**
     * Deletes a Product
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $Product = Products::findFirstByid($id);
        if (!$Product) {
            $this->flash->error("Product was not found");

            return $this->dispatcher->forward(array(
                "controller" => "Products",
                "action" => "index"
            ));
        }

        if (!$Product->delete()) {

            foreach ($Product->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "Products",
                "action" => "search"
            ));
        }

        $this->flash->success("Product was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "Products",
            "action" => "index"
        ));
    }

}
