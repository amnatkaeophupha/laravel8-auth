@extends('admin/layouts/users')

@section('title', 'มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา')

@section('content')
<div class="outer">
    <div class="inner bg-container">
            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissable">{{Session::get('success')}}<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button></div>
            @endif
            @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissable">{{Session::get('error')}}<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button></div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-info" style="font-family:'Chakra Petch',sans-serif;font-weight:500;">รายชื่อผู้ใช้งานระบบ</div>
                    <div class="card-body m-t-35" id="user_body">
                        <div class="table-toolbar">
                            <button class="btn btn-info mb-3 adv_cust_mod_btn"
                            data-target="#modal-17"
                            data-toggle="modal"
                            onclick="clearModalData()"><i class="fa fa-plus"></i> Add New User</button>

                            <div class="btn-group" style="font-family: 'Chakra Petch', sans-serif;font-weight:500;">
                            </div>
                            <div class="btn-group float-right users_grid_tools">
                                <div class="tools"></div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid" style="font-family: 'Chakra Petch', sans-serif;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc wid-10" tabindex="0" rowspan="1" colspan="1">ID</th>
                                            <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">FullName</th>
                                            <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">E-Mail</th>
                                            <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Phone</th>
                                            <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Role</th>
                                            <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr role="row" class="even" id="">
                                        <td class="sorting_1"></td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td class="center">{{ $user->role }}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"
                                            onclick="editUser({{ $user->id }}, '{{ $user->name }}', '{{ $user->email }}','{{ $user->phone }}','{{ $user->role }}')"
                                            data-target="#modal-17"
                                            data-toggle="modal">Edit</button>
                                            <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $user->id }})">Delete</button>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.inner -->
</div>

<!--   modal Create and Update -->
<div class="modal fade" id="modal-17" role="dialog" aria-labelledby="modalLabelinfo">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="font-family:'Chakra Petch', sans-serif;">
        <form action="{{ url('admin/users/StoreOrUpdate'); }}" method="POST">
        @csrf
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white" id="modalLabelinfo" style="font-family:'Chakra Petch', sans-serif;">Create or Edit User</h4>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="username" class="col-form-label">Fullname *</label>
                        <div class="input-group input-group-prepend">
                        <span class="input-group-text border-right-0 rounded-left"> <i class="fa fa-user text-primary"></i>
                        </span>
                            <input type="text" class="form-control" name="users[0][name]" id="user-name" placeholder="Username">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="email" class="col-form-label">Email *</label>
                        <div class="input-group input-group-prepend">
                        <span class="input-group-text border-right-0 rounded-left">
                            <i class="fa fa-envelope text-primary"></i>
                        </span>
                            <input type="text" placeholder="Email Address"  name="users[0][email]" id="user-email" class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="password" class="col-form-label text-sm-right">Password *</label>
                        <div class="input-group input-group-prepend">
                        <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-key text-primary"></i></span>
                            <input type="password" placeholder="Password"  id="user1-password" name="users[0][password]" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="confirmpassword" class="col-form-label">Confirm Password *</label>
                        <div class="input-group input-group-prepend">
                        <span class="input-group-text border-right-0 rounded-left">
                            <i class="fa fa-key text-primary"></i>
                        </span>
                            <input type="password" placeholder="Confirm Password" name="users[0][password_confirmation]" id="user1-password_confirmation" class="form-control" required />
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="phone" class="col-form-label">Phone *</label>
                        <div class="input-group input-group-prepend">
                        <span class="input-group-text border-right-0 rounded-left">
                            <i class="fa fa-phone text-primary"></i>
                        </span>
                            <input type="text" placeholder="Phone Number" name="users[0][phone]" id="user-phone" class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="phone" class="col-form-label">Role *</label>
                        <div class="input-group input-group-prepend">
                        <span class="input-group-label input-group-text border-right-0 rounded-left"><i class="fa fa-plus text-primary"></i></span>
                        <select id="user-role" name="users[0][role]" class="form-control">
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="manager" {{ $user->role == 'manager' ? 'selected' : '' }}>Manager</option>
                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                        </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="users[0][id]" id="user-id">
                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Edit user in the modal
    function editUser(id, name, email, phone, role) {
        $('#user-id').val(id);
        $('#user-name').val(name);
        $('#user-email').val(email);
        $('#user-phone').val(phone);
        $('#user-role').val(role);
    }

    // Clear the modal data for adding a new user
    function clearModalData() {
        $('#user-id').val('');
        $('#user-name').val('');
        $('#user-email').val('');
        $('#user-phone').val('');
        $('#user-role').val('user');
    }


    function confirmDelete(userId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This action cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the hidden form
                document.getElementById(`delete-form-${userId}`).submit();
            }
        });
    }
</script>
@endsection
