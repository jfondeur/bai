<?php 
/* Template name: Contact */ 
get_header();
 ?>

 <section class="container py-5">
     <div class="row">
         <div class="col-md-12 text-center">
             <h1 class="brown">Contact us Today</h1>
             <p class="my-5">Llena el siguiente formulario y estaremos respondiendo a tu solicutud en breve.</p>
         </div>
     </div>
     <div class="row justify-content-center">
         <div class="col-md-8">
             <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]')?>
         </div>
     </div>
 </section>

 <?php get_footer() ?>