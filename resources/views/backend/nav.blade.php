<div class="hs_top_header_main_Wrapper">
    @if(\Illuminate\Support\Facades\Auth::check())
        <div class="container">
            <div class="hs_header_logo_left hidden-xs">
                <div class="hs_logo_wrapper">
                    <a href="{{url('dashboard')}}"><img src="{{asset('images/header/ll.jpg')}}" class="img-responsive" alt="logo" title="Logo"/></a>
                </div>
            </div>
            <div class="hs_header_logo_right">
                <div class="hs_top_user_profile" data-toggle="modal" data-target="#myModal">
                    <img src="{{asset('images/header/avatar.jpg')}}" alt="user">
                </div>
                <div class="hs_header_add_wrapper hidden-xs hidden-sm">
                    <div class="hs_header_add_icon_cont">
                        <h5>Name</h5>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->first_name}} {{\Illuminate\Support\Facades\Auth::user()->last_name}}</p>
                    </div>
                </div>
                <div class="hs_header_add_wrapper hidden-xs hidden-sm">
                    <div class="hs_header_add_icon_cont">
                        <h5>Email</h5>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->email}}</p>
                    </div>
                </div>
                <div class="hs_btn_wrapper">
                    <ul>
                        <li><a href="#" class="hs_btn_hover" data-toggle="modal" data-target="#updateProfile">Update Profile</a></li>
                    </ul>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">LOGOUT</h4>
                            </div>
                            <div class="modal-body">
                                <div id="login">
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <P>ARE YOU SURE!!</P>
                                        <button type="submit">lOGOUT</button>
                                    </form>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal fade" id="updateProfile" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Profile</h4>
                            </div>
                            <div class="modal-body">
                                <div id="login">
                                    <form action="{{url('editProfile')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{\Illuminate\Support\Facades\Auth::id()}}" name="id">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">First Name</label>
                                            <input type="text" class="form-control" name="first_name" value="{{\Illuminate\Support\Facades\Auth::user()->first_name}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Last Name</label>
                                            <input type="text" class="form-control" name="last_name" value="{{\Illuminate\Support\Facades\Auth::user()->last_name}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Confirm Password</label>
                                            <input type="password" class="form-control" name="confirmPassword" id="confirm_password" placeholder="Confirm Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @else
        <script>window.location = "http://localhost/jobs/public/";</script>
    @endif
</div>
