<?php require_once("includes/header.php"); ?>


    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-6">
            <h2 style="color: #2b542c">Report on the available houses</h2>
        </div>
        <div class="col-sm-6">
            <div class="title-action">
                <a href="" class="btn btn-primary">Home</a>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Line Chart Example
                            <small>With custom colors.</small>
                        </h5>
                        <div ibox-tools></div>
                    </div>
                    <div class="ibox-content">
                        <div>
                            <canvas id="lineChart" height="140"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Bar Chart Example</h5>
                        <div ibox-tools></div>
                    </div>
                    <div class="ibox-content">
                        <div>
                            <canvas id="barChart" height="140"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once("includes/footer.php");