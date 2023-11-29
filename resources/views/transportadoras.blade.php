@include('includes.top')

<style>
.service-icon-thumb:hover{
  width:70px;height:70px;;
}
</style>

<div class="container">
			<div class="row" style="margin-top:100px">
				<div class="col-lg-12">
					<!-- start section title -->
					<div class="section-title text-center">
						<div class="section-main-title">
							<h2>Transportadoras </h2>
						</div>
					</div>
					<!-- End section title -->
				</div>
			</div>
			<div class="row">
      <?php for($i=0; $i < count($json->data);$i++){ ?>
        <div class="col-lg-4 col-md-6 mb-30">

      <div class="service-items-box-two" style="visibility: visible; height:200px;" >
      <div class="row">
						<div class="col-lg-3" style="width:70px;height:70px;" >
							<img src="<?php echo $json->data[$i]->logo; ?>" alt="" style="width:70px;height:70px;background-color:white !important;border:1px solid #fd7e14;border-radius:10px">
						</div><br>
            <div class="service-items-title col-lg-9" style=" margin-left:10px">
							<h4><a  style="font-size:20px !important;" href="{{url('/')}}/transportadoras/{{substr($json->data[$i]->url, 0, -15)}}">{{$json->data[$i]->fantasy_name}}</a></h4>
						</div>

      </div>
						
						<div class="service-items-content-two">
							<p><?php if($json->data[$i]->about){echo substr($json->data[$i]->about,0,60).'...';}else{echo "Sem Informações.";} ?></p>
						</div>
				</div>
        </div>
        <?php } ?>
        </div>


        <div class="pagination" style="padding-top:20px">
  @foreach($json->meta->links as $pag)
  @if($pag->label == 'pagination.previous')
  <a class="page-value" href="{{($json->meta->current_page > 1) ? url('/').'/transportadoras?page='.($json->meta->current_page - 1) : '#'}}">
    <i class="ti ti-arrow-left"></i>
  </a>
  @endif

  @if($pag->label >= 1 && $pag->label!='pagination.previous' && $pag->label!='pagination.next')
  <a class="page-value {{($pag->active == true) ? 'current' : ''}}" href="{{url('/').'/transportadoras?page='.$pag->label}}">{{$pag->label}}</a>
  @endif

  @if($pag->label == 'pagination.next')
  <a class="page-value" href="{{($json->meta->current_page == $json->meta->last_page)?'#' : url('/').'/transportadoraspage='.($json->meta->current_page + 1)}}">
    <i class="ti ti-arrow-right"></i>
  </a>
  @endif

  @endforeach
</div>
				
				
			
				
			</div>
			<div class="row align-items-center mt-40 wow animate__slideInUp" style="visibility: visible;">
				<div class="col-lg-6 col-md-6">
					<div class="service-disctription">
						<span><a href="service-details.html">Precisa Fazer sua Cotação de Frete?</a> Clique Aqui e Cote seu Frete</span>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="eulding-btn service">
						<a href="#">Cotação Rápida</a>
					</div>
				</div>
			</div>
		</div>

<?php ?>































</div>

@include('includes.footer')
