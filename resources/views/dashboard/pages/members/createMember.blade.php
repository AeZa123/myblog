{{-- Modal create member --}}


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <form method="POST" action="{{ route('store.member') }}" id="form">
                @csrf
                
                <div class="login-form-body">
                    <div class="form-gp">
                        <label for="exampleInputName1">Full Name</label>
                        <input type="text" name="name">
                        <i class="ti-user"></i>
                        <div class="text-danger"></div>
                        <span class="text-danger font-danger error-text name_error"></span>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email">
                        <i class="ti-email"></i>
                        <div class="text-danger"></div>
                        <span class="text-danger font-danger error-text email_error"></span>
                    </div>
                    <div class="form-gp">
                        <label>Password</label>
                        <input type="password" name="password">
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                        <span class="text-danger font-danger error-text password_error"></span>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword2">Confirm Password</label>
                        <input type="password" name="password_confirmation" >
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                        <span class="text-danger font-danger error-text password_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Role</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="role">
                            @foreach ($roles as $role)
                                <option selected="selected">{{$role->name_role}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger font-danger error-text role_error"></span>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="submit" class="btn btn-primary">บันทึก</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>