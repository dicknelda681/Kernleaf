<style>
   .modal-backdrop.show {
   backdrop-filter: blur(6px);
   background-color: rgba(0,0,0,0.4);
   }
   .form-group{
   text-align:left;
   }
</style>
<!-- Popup Modal -->
<div class="modal fade" id="contactPopup" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Get in Touch</h5>
            <button type="button" class="close btn-close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">X</span>
            </button>
         </div>
         <div class="modal-body">
            <form method="action" action="thank-you.php">
               <div class="form-group mb-3">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Your Name" name="first_name" required>
               </div>
               <div class="form-group mb-3">
                  <label>Contact Number</label>
                  <input type="text" class="form-control" placeholder="Mobile Number" name="phone" required>
               </div>
               <div class="form-group mb-3">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email Address" required>
               </div>
               <button type="submit" class="btn btn-primary w-100" style="background: black;">
               Submit
               </button>
            </form>
         </div>
      </div>
   </div>
</div>
<?php
   $currentPage = basename($_SERVER['PHP_SELF']);
   if ($currentPage == 'index.php') {
   ?>
<script>
   document.addEventListener("DOMContentLoaded", function () {
     setTimeout(function () {
       var popup = document.getElementById('contactPopup');
       if (typeof bootstrap !== "undefined") {
         // Bootstrap 5
         var modal = new bootstrap.Modal(popup);
         modal.show();
       } else {
         // Bootstrap 4
         $('#contactPopup').modal('show');
       }
     }, 2000);
   });
</script>
<?php } ?>