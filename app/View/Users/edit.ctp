<div class="form">
<form class="form-validate form-horizontal" id="feedback_form" method="post" action="/users/edit" novalidate="novalidate">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Username <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="data[User][username]" value="<?php echo $this->request->data['User']['username']; ?>"  minlength="5" type="text" >
                        
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="password" class="control-label col-lg-2"> Password <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text"  name="data[User][password]" value="<?php echo $this->request->data['User']['password']; ?>" >
                      </div>


                    </div>
                    
                     <div class="form-group ">
                      <label for="password" class="control-label col-lg-2"> UserId <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="userid" type="hid"  name="data[User][id]" value="<?php echo $this->request->data['User']['id']; ?>" >
                      </div>


                    </div>
                   
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit"> Edit </button>
                        
                      </div>
                    </div>
                  </form>
      </div>



