
    <header class="head">
    <div class="container cont d-flex justify-content-between align-items-center col-12">
        <div class="h5">
            <i id="toggle" class="las la-bars">
            </i> Food App             <img src="Assets/images/logo.png">
        </div>
        <ul class="align-items-center m-0 d-flex justify-content-end">
            <li>
                <button data-bs-toggle="modal" data-bs-target="#lgn-person" class="btn-lgn mr-3">Login</button>
                <button data-bs-toggle="modal" data-bs-target="#sgn-up" class="btn-sgnup ">SignUp</button>
            </li>
        </ul>
    </div>
</header>
<!--  SignIn Modal -->
    <div class="modal fade" id="lgn-person" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login As</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
<!--            <div class="modal-body">-->
<!---->
<!--            </div>-->
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-danger"><a href="login-admin.php">Admin</a></button>
                <button type="button" class="btn btn-danger"><a href="login-user.php">User</a></button>
            </div>
        </div>
    </div>
</div>
<!-- SignUp Modal -->
    <div class="modal fade" id="sgn-up" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Sign Up</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <h5></h5>
                    <div class="form-group">
                        <small for="formGroupExampleInput">First Name* </small>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Your First Name">
                    </div>
                    <div class="form-group">
                        <small for="formGroupExampleInput">Last Name* </small>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Your First Name">
                    </div>
                    <div class="form-group">
                        <small for="formGroupExampleInput2"> Phone No*</small>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Phone No">
                    </div>
                    <div class="form-group">
                        <small for="formGroupExampleInput2"> Address*</small>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Phone No">
                    </div>
                    <div class="form-group">
                        <small for="formGroupExampleInput2">Email*</small>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group">
                        <small for="exampleFormControlTextarea1">Message</small>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter a Message" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
    <script>
        const sidebar = document.querySelector('.main-sbar');
        const toggle = document.getElementById("toggle");
        const gridRight = document.querySelector('.gd-rt');
        toggle.addEventListener("click",()=>{
            if(sidebar.classList != "s-active"){
                sidebar.classList.toggle("s-active")
                gridRight.classList.toggle("w-1")
                // gridRight.style.width = "100vw"
                // if(sidebar.classList != "s-active"){
                //     gridRight.style.width = "100vw"
                // } else{
                //     gridRight.style.width = "100%"
                // }
            }
        })
        const sideNavs = document.querySelectorAll(".a");
        sideNavs.forEach((ele)=>{
            ele.addEventListener("click",()=>{
                ele.classList.toggle("sideNavActive")
            })
        })

    </script>

