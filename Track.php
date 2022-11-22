<?php require_once 'headlinks.php'?>
<div class="main">
    <?php require_once 'sidebar.php'?>
    <div class="gd-rt">
        <?php require_once 'header.php'?>
        <div class="container tbl-con col-12 chef">
            <div class="w-95 mx-auto ord-sear">
                <h3>Track Your Order</h3>
                <input class="ser-del" placeholder="Search" />
            </div>
            <div class="card">
                <div class="card-body crd-prnt">
                    <div class="del-crd">
                        <div>
                            <h6>Order No:</h6>
                            <small class="del-ordNo">00001</small>
                        </div>
                        <div>
                            <h6>Name</h6>
                            <small>Smith K.</small>
                        </div>
                        <div>
                            <h6>Dispatched At:</h6>
                            <small>20:30</small>
                        </div>
                        <div>
                            <button data-bs-toggle="modal" data-bs-target="#track" class="btn-lgn mr-3 trk-ord">Track Order</button><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body crd-prnt">
                    <div class="del-crd">
                        <div>
                            <h6>Order No:</h6>
                            <small class="del-ordNo">00002</small>
                        </div>
                        <div>
                            <h6>Name</h6>
                            <small>Smith K.</small>
                        </div>
                        <div>
                            <h6>Dispatched At:</h6>
                            <small>20:30</small>
                        </div>
                        <div>
                            <button data-bs-toggle="modal" data-bs-target="#track" class="btn-lgn mr-3 trk-ord">Track Order</button><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body crd-prnt">
                    <div class="del-crd">
                        <div>
                            <h6>Order No:</h6>
                            <small class="del-ordNo">00003</small>
                        </div>
                        <div>
                            <h6>Name</h6>
                            <small>Smith K.</small>
                        </div>
                        <div>
                            <h6>Dispatched At:</h6>
                            <small>--</small>
                        </div>
                        <div>
                            <button data-bs-toggle="modal" data-bs-target="#track" class="btn-lgn mr-3 trk-ord">Track Order</button><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body crd-prnt">
                    <div class="del-crd">
                        <div>
                            <h6>Order No:</h6>
                            <small class="del-ordNo">00004</small>
                        </div>
                        <div>
                            <h6>Name</h6>
                            <small>Smith K.</small>
                        </div>
                        <div>
                            <h6>Dispatched At:</h6>
                            <small>--</small>
                        </div>
                        <div>
                            <button data-bs-toggle="modal" data-bs-target="#track" class="btn-lgn mr-3 trk-ord">Track Order</button><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body crd-prnt">
                    <div class="del-crd">
                        <div>
                            <h6>Order No:</h6>
                            <small class="del-ordNo">00005</small>
                        </div>
                        <div>
                            <h6>Name</h6>
                            <small>Smith K.</small>
                        </div>
                        <div>
                            <h6>Dispatched At:</h6>
                            <small>--</small>
                        </div>
                        <div>
                            <button data-bs-toggle="modal" data-bs-target="#track" class="btn-lgn mr-3 trk-ord">Track Order</button><br>
                        </div>
                    </div>
                </div>
            </div>
            <div id="track" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Tracking...</h3>
                        </div>
                        <div class="modal-body text-muted mt-3">
                            <div class="w-90 mx-auto trk-mod">
                                <div class="trk-gd-lft">
                                    <h6>Name:Smith</h6>
                                    <h6>Dispatched At: 20:30</h6>
                                    <h6>Cooking Status: Cooked</h6>
                                </div>
                                <div class="trk-gd-rt">
                                    <h6>Order No: 0001</h6>
                                    <h6>Will be Delievered till: 20:55</h6>
                                    <h6>Will be Cooked till: --</h6>

                                </div>
                            </div>
                            <h6 class="w-90 mx-auto">Address: House No xxx Sector yyy California America</h6>
<!--                            <div class="d-flex flex-column">-->
<!--                                <div class="d-flex justify-content-between w-90 mx-auto">-->
<!--                                    <label class="d-flex justify-content-between w-50">-->
<!--                                        <h6>Name:</h6>-->
<!--                                        <h6>Smith K.</h6>-->
<!--                                    </label>-->
<!--                                    <label class="d-flex w-50">-->
<!--                                        <h6>Order No:</h6>-->
<!--                                        <h6>0001</h6>-->
<!--                                    </label>-->
<!--                                </div>-->
<!--                                <div class="d-flex w-90 mx-auto">-->
<!--                                    <h6>Dispatched At: 20:30</h6>-->
<!--                                    <h6>Will Be Delievered At: 20:50</h6>-->
<!--                                </div>-->
<!--                                <div class="w-90 mx-auto">-->
<!--                                <h6>Address: House No xxx Sector yyy California America</h6>-->
<!--                                </div>-->
<!--                            </div>-->
                            <h3 class="text-center mt-5">ThankYou</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'footer.php'?>
<script>
    const searchDel = document.querySelector(".ser-del");
    const delOrderNo = document.querySelectorAll('.del-ordNo');

    searchDel.addEventListener("keyup",(event)=>{
        const searchDelValue = event.target.value;
        console.log(searchDelValue)
        delOrderNo.forEach((elem,index)=>{
            const delNumber = elem.innerText;
            if(delNumber.indexOf(searchDelValue) == -1){
                elem.parentElement.parentElement.parentElement.parentElement.style.display = "none";
            } else{
                elem.parentElement.parentElement.parentElement.parentElement.style.display = "block";
            }
        })
    })
</script>
