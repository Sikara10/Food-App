<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<?php require_once 'headlinks.php'?>
<div class="main">
    <?php require_once 'sidebar.php'?>
    <div class="gd-rt">
        <?php require_once 'header.php'?>
        <div class="container tbl-con col-12 db-content">
            <div class="db-content-lft">
                <div class="card db-crd1">
                    <div class="card-body">
                        <div class="d-flex justify-content-around">
                            <div class="align-items-center d-flex w-50">
                                <i class="fas fa-chart-line fa-lg"></i>
                                <h5>Sales</h5>
                            </div>
                            <div class="cb-1">
                                <h6>+17%</h6>
                            </div>
                        </div>
                        <h3 class="text-black mx-auto">$ 75,000</h3>
                        <img src="Assets/images/graph.png">
                    </div>
                </div>
                <div class="card db-crd2">
                    <div class="card-body">
                        <div class="d-flex justify-content-around">
                            <div class="align-items-center d-flex w-50">
                                <i class="fas fa-toolbox fa-lg"></i>
                                <h5>Balance</h5>
                            </div>
                            <div class="cb-2">
                                <h6>+20%</h6>
                            </div>
                        </div>
                        <h3 class="text-black mx-auto">$ 10,200</h3>
                        <img src="Assets/images/graph.png">
                    </div>
                </div>
                <div class="card db-crd3">
                    <div class="card-body">
                        <div class="d-flex justify-content-around">
                            <div class="align-items-center d-flex w-50">
                                <i class="fas fa-money-bill-wave fa-lg"></i>
                                <h5>Profits</h5>
                            </div>
                            <div class="cb-3">
                                <h6>+30%</h6>
                            </div>
                        </div>
                        <h3 class="text-black mx-auto">$ 88,000</h3>
                        <img src="Assets/images/graph.png">
<!--                    <img src="Assets/images/g2.png">-->
                    </div>
                </div>
                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                <script>
                    var xValues = [100,200,300,400,500,600,700,800,900,1000];

                    new Chart("myChart", {
                        type: "line",
                        data: {
                            labels: xValues,
                            datasets: [{
                                data: [860,1140,1060,1060,1070,1110,1330],
                                borderColor: "red",
                                fill: false
                            }, {
                                data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
                                borderColor: "green",
                                fill: false
                            }, {
                                data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
                                borderColor: "blue",
                                fill: false
                            }]
                        },
                        options: {
                            legend: {display: false}
                        }
                    });
                </script>
            </div>
            <div class="db-content-rt">
                <h4>Recent Orders</h4>
                <div>
                    <div class="card">
                    <div class="card-body d-flex">
                        <div class="d-flex justify-content-between">
                            <div class="db-img"><img src="Assets/images/prof.jpg"></div>
                            <div>
                                <p>Smith K.</p>
                                <small class="text-muted">02 Minutes Ago</small>
                            </div>
                        </div>
                        <p>$52.00</p>

                    </div>
                </div>
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="d-flex justify-content-between">
                                <div class="db-img"><img src="Assets/images/prof.jpg"></div>
                                <div>
                                    <p>Smith K.</p>
                                    <small class="text-muted">02 Minutes Ago</small>
                                </div>
                            </div>
                            <p>$52.00</p>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="d-flex justify-content-between">
                                <div class="db-img"><img src="Assets/images/prof.jpg"></div>
                                <div>
                                    <p>Smith K.</p>
                                    <small class="text-muted">02 Minutes Ago</small>
                                </div>
                            </div>
                            <p>$52.00</p>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="d-flex justify-content-between">
                                <div class="db-img"><img src="Assets/images/prof.jpg"></div>
                                <div>
                                    <p>Smith K.</p>
                                    <small class="text-muted">02 Minutes Ago</small>
                                </div>
                            </div>
                            <p>$52.00</p>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="d-flex justify-content-between">
                                <div class="db-img"><img src="Assets/images/prof.jpg"></div>
                                <div>
                                    <p>Smith K.</p>
                                    <small class="text-muted">02 Minutes Ago</small>
                                </div>
                            </div>
                            <p>$52.00</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
