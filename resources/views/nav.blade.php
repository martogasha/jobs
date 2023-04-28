<div class="hs_top_header_main_Wrapper">
    <div class="container">
        <div class="hs_header_logo_left hidden-xs">
            <div class="hs_logo_wrapper">
                <a href="{{url('/')}}"><img src="{{asset('images/header/ll.jpg')}}" class="img-responsive" alt="logo" title="Logo"/></a>
            </div>
        </div>
        <div class="hs_header_logo_right">
            <div class="hs_top_user_profile" data-toggle="modal" data-target="#myModal">
                <img src="{{asset('images/header/avatar.jpg')}}" alt="user">
                <p><i class="fa fa-plus"></i></p>
            </div>
            <div class="hs_btn_wrapper">
                <ul>
                    <li><a href="#" class="hs_btn_hover">Appointments</a></li>
                </ul>
            </div>
            <div class="hs_header_add_wrapper hidden-xs hidden-sm">
                <div class="hs_header_add_icon">
                    <i class="fa fa-home"></i>
                </div>
                <div class="hs_header_add_icon_cont">
                    <h5>Reach Us</h5>
                    <p>601 , Ram Nagar Dewas</p>
                </div>
            </div>
            <div class="hs_header_add_wrapper hidden-xs hidden-sm">
                <div class="hs_header_add_icon">
                    <i class="fa fa-phone"></i>
                </div>
                <div class="hs_header_add_icon_cont">
                    <h5>Talk to Astrologers</h5>
                    <p>+91-123456789</p>
                </div>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">LogIn</h4>
                        </div>
                        <div class="modal-body">
                            <div id="login">
                                <form action="{{url('Login')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                    </div>
                                    <button type="submit">Submit</button>
                                </form>
                                <button style="background-color: blue" id="registerButton">Register</button>
                            </div>
                            <div id="register">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" id="first_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" aria-describedby="emailHelp" placeholder="Last Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="registerEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="registerPassword" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" required>
                                </div>
                                <button class="btn btn-primary" id="regButton">Submit</button>
                                <button style="background-color: blue" id="loginButton">Login</button>
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
</div>
