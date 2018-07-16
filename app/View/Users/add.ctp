<div class="col-lg-12">
            <section class="panel">
             
              <div class="panel-body">
                <form role="form" action="/users/add" method="post">
                  <div class="form-group">
                    <label for="username"> Username </label>
                    <input type="text" class="form-control" name="data[User][username]"  placeholder="Enter Your Username">
                  </div>
                  <div class="form-group">
                    <label for="username"> Email </label>
                    <input type="text" class="form-control" name="data[User][email]"  placeholder="Enter Your Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="data[User][password]" id="exampleInputPassword1" placeholder="Enter Password">
                  </div>
                  <div class="form-group">
                  
                    <div class="input select">
                      <label for="UserRole">Role
                      </label>
                      <select name="data[User][role]" id="UserRole" class="">
                        <option value="admin">Admin</option>
                        <option value="author">Author</option>
                  </select>
                  </div>
                  </div>
                 
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>

              </div>
            </section>
  </div>