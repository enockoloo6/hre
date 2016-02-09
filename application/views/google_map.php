<?php require_once("includes/header.php"); ?>
<!--
 You need to include this script on any page that has a Google Map.
 When using Google Maps on your own site you MUST signup for your own API key at:
 https://developers.google.com/maps/documentation/javascript/tutorial#api_key
 After your sign up replace the key in the URL below..
-->
       <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>This is main title</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">This is</a>
                </li>
                <li class="active">
                    <strong>Google maps</strong>
                </li>
            </ol>
        </div>
          <div class="col-sm-8">
            <div class="title-action">
                <a href="<?= base_url();?>index.php/housesearch" class="btn btn-primary">back to house search</a>
            </div>
        </div>
    </div>
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQTpXj82d8UpCi97wzo_nKXL7nYrd4G70&libraries=places"></script> -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>

            <div class="row">
                <div class="col-md-10">
                    <div class="ibox">
                        <div class="ibox-content">
                            <p>
                                With google maps <a href="https://developers.google.com/maps/documentation/javascript/reference#MapOptions">API</a> You can easy customize your map.
                            </p>

                            <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                            <div class="hre-googlemap" id="map1"></div>
                        </div>
                    </div>
                </div>
            </div>
<!--                 <div class="col-md-6">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Custom theme 1</h5>
                        </div>
                        <div class="ibox-content">
                            <p>
                                This is a custom theme for Google map.
                            </p>
                            <div class="google-map" id="map2"></div>
                        </div>
                    </div>
                </div>
            </div> -->


     
<?php require_once("includes/footer.php");