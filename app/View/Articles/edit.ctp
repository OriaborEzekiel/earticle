<div class="panel-body">
                <form class="form-horizontal" role="form" action="/articles/edit" method="post">
                  <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label"> Title </label>
                    <div class="col-lg-10">
                  <input type="text" class="form-control" id="inputEmail1" name="data[Article][title]" value="<?php echo $this->request->data['Article']['title']; ?>" >
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputPassword1" name="data[Article][body]" value="<?php echo $this->request->data['Article']['body']; ?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword1" class="col-lg-2 control-label">Article id </label>
                    <div class="col-lg-10">
                      <input type="" class="form-control" id="inputPassword1" name="data[Article][id]" value="<?php echo $this->request->data['Article']['id']; ?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button type="submit" class="btn btn-danger"> Edit </button>
                    </div>
                  </div>
                </form>
  </div>


  

