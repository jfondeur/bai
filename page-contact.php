<?php 
/* Template name: Contact */ 
get_header();
 ?>

 <section class="container py-5">
     <div class="row">
         <div class="col-md-12 text-center">
             <h1 class="brown">Entre em contato com BAI Capital</h1>
             <p class="mt-2 mb-5">Preencha o formulário abaixo e responderemos a sua solicitação em breve</p>
         </div>
     </div>
     <div class="row justify-content-center">
         <div class="col-md-8">
             <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]')?>
         </div>
     </div>
 </section>

 <?php get_footer() ?>