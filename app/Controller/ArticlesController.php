<?php
	class ArticlesController extends AppController{

		public function beforeFilter(){
			//parent::beforeFilter();
			//$this->Auth->deny();

			$this->Auth->allow("index");
		}

		public function index(){


			if($this->Auth->user("role") == "admin"){

				$this->set("articles", $this->Article->find("all"));
				$this->set("users", $this->Auth->user("username"));

			}else{

				$this->set("articles", $this->Article->find("all", array("conditions" => array("user_id" => $this->Auth->user("id")))));
			}

			
			//die(debug(empty($this->data["Article"]["user_id"])));


			$AuthUser = $this->Auth->user("username");

			$this->set("AuthUser", $AuthUser);






		}


		public function add(){

			if($this->request->is("post")){

				$this->request->data["Article"]["user_id"] = $this->Auth->user("id");

				$this->Article->create();

				if($this->Article->save($this->request->data)){

					$this->Flash->success(__("Your article has been successfully saved "));

					return $this->redirect(array("action" => "index"));

				}else{
					$this->Flash->error(__("sorry could not add article"));
				}


			}


		}


		public function view($id = NULL){

			if(!$id){

				throw new notFoundException(__("invalid article"));

			}

			$article = $this->Article->findById($id);

			if(!$article){

				throw new notFoundException(__("invalid article"));

			}

			$this->set("article", $article);

		}


			public function edit($id = NULL){



					

					$article = $this->Article->findById($id);

					

					if($this->request->is(array("post", "put"))){

						$this->Article->id = $id;

						if($this->Article->save($this->request->data)){

							$this->Flash->success(__("Your post has been successfully edited"));
							return $this->redirect(array("action" => "index"));

						}

						$this->Flash->error(__("Could not edit the poste"));





					}


					if(!$this->request->data){

							$this->request->data = $article;



						}

						$this->set("article", $article);


				}


				public function delete($id = NULL){

					$this->Article->id = $id;

					if(!$id){

						throw new notFoundException(__("Invalid Article"));
						

					}
					//$this->Article->findById($id) = 
					if($this->request->is("get")){

						throw new MethodNotAllowedException();

					}

					if($this->Article->delete($id)){

						$this->Flash->success(__("the article with the id %s has been deleted", h($id)));
						return $this->redirect(array("action" => "index"));
					}else{

						$this->Flash->error(__("Sorry, could not delete the article with id %s ", h($id)));
					}

				}



		



	}
?>