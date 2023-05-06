<header class="mobail_menu visible-xs"  style="background-color: darkorange">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-6">
                <div class="hs_logo">
                    <a href="{{url('/')}}"><img src="images/header/lo.jpg" class="img-responsive" alt="logo" title="Logo"/></a>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6">
                <div class="cd-dropdown-wrapper">
                    <a class="house_toggle" href="#0">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="511.63px" height="511.631px" viewBox="0 0 511.63 511.631" style="enable-background:new 0 0 511.63 511.631;"
                             xml:space="preserve">
														<g>
                                                            <g>
                                                                <path d="M493.356,274.088H18.274c-4.952,0-9.233,1.811-12.851,5.428C1.809,283.129,0,287.417,0,292.362v36.545
																	c0,4.948,1.809,9.236,5.424,12.847c3.621,3.617,7.904,5.432,12.851,5.432h475.082c4.944,0,9.232-1.814,12.85-5.432
																	c3.614-3.61,5.425-7.898,5.425-12.847v-36.545c0-4.945-1.811-9.233-5.425-12.847C502.588,275.895,498.3,274.088,493.356,274.088z"
                                                                />
                                                                <path d="M493.356,383.721H18.274c-4.952,0-9.233,1.81-12.851,5.427C1.809,392.762,0,397.046,0,401.994v36.546
																	c0,4.948,1.809,9.232,5.424,12.854c3.621,3.61,7.904,5.421,12.851,5.421h475.082c4.944,0,9.232-1.811,12.85-5.421
																	c3.614-3.621,5.425-7.905,5.425-12.854v-36.546c0-4.948-1.811-9.232-5.425-12.847C502.588,385.53,498.3,383.721,493.356,383.721z"
                                                                />
                                                                <path d="M506.206,60.241c-3.617-3.612-7.905-5.424-12.85-5.424H18.274c-4.952,0-9.233,1.812-12.851,5.424
																	C1.809,63.858,0,68.143,0,73.091v36.547c0,4.948,1.809,9.229,5.424,12.847c3.621,3.616,7.904,5.424,12.851,5.424h475.082
																	c4.944,0,9.232-1.809,12.85-5.424c3.614-3.617,5.425-7.898,5.425-12.847V73.091C511.63,68.143,509.82,63.861,506.206,60.241z"/>
                                                                <path d="M493.356,164.456H18.274c-4.952,0-9.233,1.807-12.851,5.424C1.809,173.495,0,177.778,0,182.727v36.547
																	c0,4.947,1.809,9.233,5.424,12.845c3.621,3.617,7.904,5.429,12.851,5.429h475.082c4.944,0,9.232-1.812,12.85-5.429
																	c3.614-3.612,5.425-7.898,5.425-12.845v-36.547c0-4.952-1.811-9.231-5.425-12.847C502.588,166.263,498.3,164.456,493.356,164.456z
																	"/>
                                                            </g>
                                                        </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
														</svg>
                    </a>
                    <nav class="cd-dropdown" style="background-color: darkorange">
                        <h2>
                            <a href="index.html">Briden Jobs Alert</a>
                        </h2>
                        <a href="#0" class="cd-close">Close</a>
                        <ul class="cd-dropdown-content">
                            <!-- .has-children -->
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{url('jobs')}}">Jobs</a>
                            </li>
                            <li>
                                <a href="{{url('cvs')}}">Cvs</a>
                            </li>
                            <li>
                                <a href="{{url('shop')}}">Marketplace</a>
                            </li>
                            <li>
                                <a href="{{url('news')}}">News</a>
                            </li>
                            <br>
<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Login</button>
                        </ul>
                        <!-- .cd-dropdown-content -->



                    </nav>
                    <!-- .cd-dropdown -->

                </div>
            </div>
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

    <!-- .cd-dropdown-wrapper -->
</header>

