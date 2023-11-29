@include('includes.top')





<div class="site-breadcrumb" style="background: url(assets/img/header/header-bg.png)">
			<div class="container">
			<h2 class="breadcrumb-title">Cotação Enviada com Sucesso</h2>
				<ul class="breadcrumb-menu clearfix">
					<li><a href="<?php echo url('/'); ?>/cotacao-de-frete">Cotação de Frete</a></li>
					<li class="active">Cotação Enviada</li>
				</ul>
			</div>
		</div>

<div class="contact-us pos-rel de-padding">
			
			<div class="container">
				<div class="row">
					<div class="col-xl-6 offset-xl-3">
						<div class="site-title text-center">
							<h2>Aguarde alguns minutos...</h2>
							<p class="mb-0">
								Logo logo algumas transportadoras entrarão em contato com você!
							</p>
						</div>
					</div>
				</div>
				<div class="contact-us-wpr">
					<div class="addr-box grid-3">
						<div class="addr-box-single">
							<div class="addr-icon">
								<i class="icofont-web"></i>
							</div>
							<div class="addr-desc">
								<h5><a href="{{url('/')}}" class="tm-btn-2">Página Principal</a></h5>
								<p class="mb-0">
									Acesse nossa página principal e confira as novidades sobre logística
								</p>
							</div>
						</div>
						<div class="addr-box-single">
							<div class="addr-icon">
								<i class="icofont-truck"></i>
							</div>
							<div class="addr-desc">

								<h5><a href="{{url('/')}}/cotacao-de-frete" class="tm-btn-2">Nova cotação de frete</a></h5>
								<p class="mb-0">
									Encontre as melhores transportadoras para enviar o seu frete
								</p>
							</div>
						</div>
						<div class="addr-box-single">
							<div class="addr-icon">
								<i class="icofont-street-view"></i>
							</div>
							<div class="addr-desc">
								<h5><a href="{{url('/')}}/rotas" class="tm-btn-2">Rotas de Transporte</a></h5>
								<p class="mb-0">
									Acesse as melhores rotas de transporte para o seu frete.
								</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>











	

@include('includes.footer')