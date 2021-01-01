<footer class="footer">© <?php echo date("Y"); ?> All rights reserved. System designed by - <a href="about_us.php" target="_blank">Tanay Choudhari</a></footer> 
<script src="js/lib/jquery/jquery.min.js"></script>
<script src="js/lib/bootstrap/js/popper.min.js"></script>
<script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/sidebarmenu.js"></script>
<script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="js/lib/datamap/d3.min.js"></script>
<script src="js/lib/datamap/topojson.js"></script>
<script src="js/lib/datamap/datamaps.world.min.js"></script>
<script src="js/lib/datamap/datamap-init.js"></script>
<script src="js/lib/weather/jquery.simpleWeather.min.js"></script>
<script src="js/lib/weather/weather-init.js"></script>
<script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
<script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
<script src="js/lib/chartist/chartist.min.js"></script>
<script src="js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
<script src="js/lib/chartist/chartist-init.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/lib/sweetalert/sweetalert.min.js"></script>
<script src="js/lib/sweetalert/sweetalert.init.js"></script>
<script src="js/lib/datatables/datatables.min.js"></script>
<script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="js/lib/datatables/datatables-init.js"></script>
<script src="js/lib/calendar-2/moment.latest.min.js"></script>
<script src="js/lib/calendar-2/semantic.ui.min.js"></script>
<script src="js/lib/calendar-2/prism.min.js"></script>
<script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
<script src="js/lib/calendar-2/pignose.init.js"></script>
<script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="js/lib/html5-editor/wysihtml5-0.3.0.js"></script>
<script src="js/lib/html5-editor/bootstrap-wysihtml5.js"></script>
<script src="js/lib/html5-editor/wysihtml5-init.js"></script>
<script>
$('a.yourlink').click(function(e){
  e.preventDefault();
  window.open('about_us.php');
  window.open('https://www.instamojo.com/minfospace/');
});
</script>
<script>
function myFunction(){
	var x = document.getElementById("snackbar");
  x.className = "show";

  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
<script>
function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8);
};
                                        </script>
                                        <script>
    // WRITE THE VALIDATION SCRIPT.
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }    
</script>
<script>
// Click function for show the Modal

$(".show").on("click", function(){
  $(".mask").addClass("active");
});

// Function for close the Modal

function closeModal(){
  $(".mask").removeClass("active");
}

// Call the closeModal function on the clicks/keyboard

$(".close, .mask").on("click", function(){
  closeModal();
});

$(document).keyup(function(e) {
  if (e.keyCode == 27) {
    closeModal();
  }
});
</script>






 <!-- <link href="css/lib/sweetalert/sweetalert.css" rel="stylesheet"> -->
<?php //if(!empty($_SESSION['success'])) {  ?>
                <!-- <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Success</h4>
                                <div class="card-content">
                                    <p><?php //echo $_SESSION['success']; ?></p>
                                    <div class="sweetalert m-t-15">
                                        <button class="btn btn-success btn sweet-success">Sweet Success</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div> -->
 <?php //unset($_SESSION["success"]);  
//} ?>
<?php //if(empty($_SESSION['success'])) {  ?>
             <!-- <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Wrong</h4>
                                 <p><?php //echo $_SESSION['error']; ?></p>
                                <div class="card-content">
                                    <div class="sweetalert m-t-15">
                                        <button class="btn btn-danger btn sweet-wrong">Sweet Wrong</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div> -->
<?php //unset($_SESSION["error"]);  } ?>