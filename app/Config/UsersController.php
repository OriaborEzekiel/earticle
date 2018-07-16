<?php
	
	App::uses("AppController","Controller");
	App::uses("CakeEmail", "Network/Email");
	class UsersController extends AppController{


		public function login(){

			$this->layout = "login";

			if($this->request->is("post")){

				//(debug($this->request->data));
				//(debug($this->Auth->login()));
				//die(debug($this->Auth->user()));

				if($this->Auth->login()){

					return $this->redirect($this->Auth->redirectUrl());

				}else{

					$this->Flash->error(__("Sorry, Your username or password is incorrect"));
				}



			}



		}



		public function logout(){

			//$this->redirect($this->Auth->redirectUrl());
			return $this->redirect($this->Auth->logout());
			
		}


		public function add(){

			if($this->request->is("post")){

				$this->User->create();

				if($this->User->save($this->request->data)){

					$link = array("controller" => "users", "action" => "activate", $this->User->id . "-".md5($this->request->data["User"]["password"]));
					$mail = new CakeEmail("smtp");
					$mail->from("oriaborezekiel4success@gmail.com")
						 ->to($this->request->data["User"]["email"])
						 ->subject("Test :: Inscription")
						 ->emailFormat("html")
						 ->template("signup")
						 ->viewVars(array('username'=>$this->request->data['User']['username'], 'link'=>$link))
					 ->send();


					 $this->Flash->success(__("The User has been saved, please check your email to complete your registration"));
					 //$this->Auth->login($this->data);

					 return $this->redirect(array("controller" => "users", "action" => "login"));

				}else{
					$this->Flash->error(__('The user could not be saved. Please, try again.'));
				}

			}


			

		}


		public function activate(){

			$this->Auth->login($this->User->id);

			$User = $this->User->find("first", array("order" => array("User.created" =>  "desc")));

			$this->set("users", $User);


		}


		public function beforeFilter(){

			$this->Auth->allow("add");

		}


		public function index($id = NULL){

			if($this->Auth->user("role") === "admin"){

				$this->paginate = array("conditions" => array("User.id !=" => "6"), "limit" => "3", "order" => array("id" => "asc"));

				$users = $this->paginate("User");

				$this->set("users", $users);

			}else{

				$this->paginate = array("conditions" => array("User.id" => $this->Auth->user("id")));

				$users = $this->paginate("User");

				$this->set("users", $users);

			}


		}

		public function view($id=NULL){

			$this->User->id = $id;

			if(!$this->User->exists()){

				throw new notFoundException(__("Invalid User!"));

			}

			$this->set("user", $this->User->findById($id));


		}

		public function edit($id = NULL){

			$this->User->id = $id;
			

			if($this->request->is("post") OR $this->request->is("put")){

				if($this->User->save($this->request->data)){

				$this->Flash->success(__("successfully edited"));
				return $this->redirect(array("action" => "index"));

			}else{
				$this->Flash->error(__("not edited "));
			}

			}

			

				$this->request->data = $this->User->findById($id);

				

				$this->set("user", $this->request->data);

			}


	}


?>



