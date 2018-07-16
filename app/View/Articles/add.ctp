<div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form"  novalidate="novalidate" action="/articles/add" method="post">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Title <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="data[Article][title]" minlength="5" type="text" required="">
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Body <span class="required">*</span></label>
                      <div class="col-lg-10">
                       <textarea class="form-control " id="ccomment" name="data[Article][body]" required="" style="margin: 0px -0.34375px 0px 0px; width: 932px; height: 105px;"></textarea>
                      </div>
                    </div>
                    
                   
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Save</button>
                        
                      </div>
                    </div>
                  </form>
                </div>

    </div>