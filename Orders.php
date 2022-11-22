<?php require_once 'headlinks.php'?>
<div class="main">
    <?php require_once 'sidebar.php'?>
    <div class="gd-rt">
        <?php require_once 'header.php'?>
        <div class="container tbl-con col-12">
            <div class="w-90 mx-auto ord-sear">
                <h3>Orders</h3>
                <input class="ser-ord" placeholder="Search By Order No...." />
            </div>
            <table id="example" class="table table-striped mx-auto mt-3">
            <thead>
            <tr>
                <th>Order No.</th>
                <th>Name</th>
                <th>Address</th>
                <th>Order Time</th>
                <th>Recieved At</th>
                <th>Assign</th>
                <th>View</th>
            </tr>
            </thead>
            <tbody>
            <tr class="order">
                <td class="ordNo">00001</td>
                <td>Smith</td>
                <td>House No xxx Sector yyy California America</td>
                <td>60 min</td>
                <td>20:30</td>
                <td><button class="btn-det-gr asgn  ">Assign order</button></td>
                <td><button data-bs-toggle="modal" data-bs-target="#viewdetails" class="btn-det w-95px">View Details</button></td>
            </tr>
            <tr class="order">
                <td class="ordNo">00002</td>
                <td>Smith</td>
                <td>House No xxx Sector yyy California America</td>
                <td>60 min</td>
                <td>20:30</td>
                <td><button class="btn-det-gr asgn  ">Assign order</button></td>
                <td><button data-bs-toggle="modal" data-bs-target="#viewdetails" class="btn-det w-95px">View Details</button></td>
            </tr>
            <tr class="order">
                <td class="ordNo">00003</td>
                <td>Smith</td>
                <td>House No xxx Sector yyy California America</td>
                <td>60 min</td>
                <td>20:30</td>
                <td><button class="btn-det-gr asgn  ">Assign order</button></td>
                <td><button data-bs-toggle="modal" data-bs-target="#viewdetails" class="btn-det w-95px">View Details</button></td>
            </tr>
            <tr class="order">
                <td class="ordNo">00004</td>
                <td>Smith</td>
                <td>House No xxx Sector yyy California America</td>
                <td>60 min</td>
                <td>20:30</td>
                <td><button class="btn-det-gr asgn  ">Assign order</button></td>
                <td><button data-bs-toggle="modal" data-bs-target="#viewdetails" class="btn-det w-95px">View Details</button></td>
            </tr>
            <tr class="order">
                <td class="ordNo">00005</td>
                <td>Smith</td>
                <td>House No xxx Sector yyy California America</td>
                <td>60 min</td>
                <td>20:30</td>
                <td><button class="btn-det-gr asgn  ">Assign order</button></td>
                <td><button data-bs-toggle="modal" data-bs-target="#viewdetails" class="btn-det w-95px">View Details</button></td>
            </tr>
            <tr class="order">
                <td class="ordNo">00006</td>
                <td>Smith</td>
                <td>House No xxx Sector yyy California America</td>
                <td>60 min</td>
                <td>20:30</td>
                <td><button class="btn-det-gr asgn  ">Assign order</button></td>
                <td><button data-bs-toggle="modal" data-bs-target="#viewdetails" class="btn-det w-95px">View Details</button></td>
            </tr>
            <tr class="order">
                <td class="ordNo">00007</td>
                <td>Smith</td>
                <td>House No xxx Sector yyy California America</td>
                <td>60 min</td>
                <td>20:30</td>
                <td><button class="btn-det-gr asgn  ">Assign order</button></td>
                <td><button data-bs-toggle="modal" data-bs-target="#viewdetails" class="btn-det w-95px">View Details</button></td>
            </tr>
            <tr class="order">
                <td class="ordNo">00008</td>
                <td>Smith</td>
                <td>House No xxx Sector yyy California America</td>
                <td>60 min</td>
                <td>20:30</td>
                <td><button class="btn-det-gr asgn  ">Assign order</button></td>
                <td><button data-bs-toggle="modal" data-bs-target="#viewdetails" class="btn-det w-95px">View Details</button></td>

            </tr>
            <tr class="order">
                <td class="ordNo">00009</td>
                <td>Smith</td>
                <td>House No xxx Sector yyy California America</td>
                <td>60 min</td>
                <td>20:30</td>
                <td><button class="btn-det-gr asgn  ">Assign order</button></td>
                <td><button data-bs-toggle="modal" data-bs-target="#viewdetails" class="btn-det w-95px">View Details</button></td>

            </tr>
            </tbody>
            </table>
            <div id="viewdetails" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div style="top: 80px" class="det-modal modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Order Details</h3>
                        <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">X</a>
                    </div>
                    <div class="modal-body">
                        <div class="bdy-grd">
                            <div class="w-90 mb-3 mx-auto d-flex justify-content-between">
                                <label class="h6">Name: Smith</label>
                                <label class="h6">Order No: 0001</label>
                            </div>
                            <div class="bdy-grd-in">
                                <div class="d-flex justify-content-around">
                                    <label>
                                        <p>Item:</p>
                                        <small>Pizza</small><br>
                                        <small>Burger</small><br>
                                        <small>Tikka</small><br>
                                        <small>Water</small><br>
                                        <small>Coleslaw</small><br>
                                        <small>Drinks</small>
                                    </label>
                                    <label>
                                        <p>Rate</p>
                                        <small>10$</small><br>
                                        <small>6$</small><br>
                                        <small>6$</small><br>
                                        <small>6$</small><br>
                                        <small>6$</small><br>
                                        <small>6$</small>
                                    </label>
                                    <label>
                                        <p>Quatity:</p>
                                        <small>x3</small><br>
                                        <small>x4</small><br>
                                        <small>x3</small><br>
                                        <small>x3</small><br>
                                        <small>x3</small><br>
                                        <small>x3</small>
                                    </label>
                                </div><br>
                                <label class="h6">Overall Status: Not Ready</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>
<?php require_once 'footer.php'?>

<script>
        const assign = document.querySelectorAll('.asgn');

        const value = document.querySelector('.ser-ord')
        const ordNo = document.querySelectorAll('.ordNo');
        // const order = document.querySelectorAll(".order")

            assign.forEach(function (elem){
            elem.addEventListener("click",()=>{
            elem.style.backgroundColor="black";
            elem.innerHTML="Assigned"
            })
        })

        value.addEventListener("keyup",(event)=>{
            const sBarVal = event.target.value;
            ordNo.forEach((elem,index)=>{
                const orderNumber = elem.innerText;
                if(orderNumber.indexOf(sBarVal) == -1){
                    elem.parentElement.style.display = "none";
                } else{
                    // elem.parentElement.style.display = "block";
                }
            })
        })
</script>

