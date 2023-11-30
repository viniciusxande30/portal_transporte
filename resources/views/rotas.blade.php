@include('includes.top')
<style>
   
   section {
   margin-top:25px;
     padding-bottom: 50px;
   }

   .headline {
     color: #343a40;
   }

   .listing {
     background-color: #ffffff;
     margin-bottom: 20px;
     padding: 15px;
     text-decoration: none;
     color: #343a40;
     display: block;
     border-left: 5px solid #fd7e14;
     border-radius: 5px;
   }

   .listing-title {
     padding: 0;
   }

   .listing-title h4 {
   font-size:15px;
     margin: 0;
   }

   .centered {
     text-align: center;
   }
 </style>


 <section>
 <div class="container">
 

   <h3 class="headline centered mb-50">Rotas de transportadora mais buscadas</h3>
 <div class="row">
 @foreach($json as $routes)


     <div class="col-lg-4 col-md-4">
       <a href="<?php echo url('/').'/transportadoras/'.$routes->origin->url.'/'.$routes->destination->url ?>" class="listing full-time" style="background-color:#F5F7FA">
         <div class="listing-title" style="padding:0;">
           <h4>{{$routes->origin->value}} para {{$routes->destination->value}}</h4>
         </div>
       </a>
 </div>
 @endforeach
 </div>
</section>

@include('includes.footer')