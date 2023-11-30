







@include('includes.top')


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<?php
// Verifica se é um dispositivo desktop usando a superglobal $_SERVER
$isDesktop = !preg_match('/(android|iphone|ipod|opera mini|blackberry|windows phone)/i', $_SERVER['HTTP_USER_AGENT']);

if ($isDesktop) {
?>	



    <style>
        .autocomplete-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .autocomplete-input {
            width: 200px;
            padding: 8px;
        }

        .suggestions-list {
			background-color:white;
			z-index: 999;
			position: absolute;
			width: 42%;
            /* 
           
            max-height: 150px;
            overflow-y: auto;
            border: 1px solid #ccc;
            border-top: none; */
        }

        .suggestion-item {
            padding: 8px;
            cursor: pointer;
            border-bottom: 1px solid #ccc;
        }

        .suggestion-item:hover {
            background-color: #f1f1f1;
        }
    </style>

	<div class="breatcome-area" style="height:600px">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="breatcome-content">
						<div class="breatcome-title">
							<h1  style="text-align:center;font-weight:none;font-size:32px">Portal do Transporte</h1>
							<p style="text-align:center;color:white;font-size:20px;margin-bottom:80px !important; line-height:30px">Faça sua Cotação de Frete com o Maior Portal de Transporte do País.<br> Temos Transportadoras para Todo o Brasil.</p>

						</div>
						<div class="row" style="text-align:center;" >
							<div class="col-lg-5 col-md-5"  style="margin:0 !important;padding:0 !important">
								<div class="form-box">
									<input type="text"  id="autocomplete-input-origem" name="name" placeholder="Origem da sua Carga" style="width: 100%;text-align:center;border-radius:5px 0px 0px 5px">
									<div class="col-lg-12 col-md-12 suggestions-list" id="suggestions-list-origem" ></div>

								</div>
							</div>
							<div class="col-lg-5 col-md-5" style="margin:0 !important;padding:0 !important" >
								<div class="form-box">
									<input type="text" id="autocomplete-input-destino" name="name" placeholder="Destino da sua Carga" style="width: 100%;text-align:center;border-radius:0px 0px 0px 0px">
									<div class="col-lg-12 col-md-12 suggestions-list" id="suggestions-list-destino"></div>

								</div>
							</div>
						
							<div class="col-lg-2 col-md-2"style="margin:0 !important;padding:0 !important">
								<div class="form-box-button" style="margin:0 !important;padding:0 !important">
									<button onclick="buscar()" type="Submit" style="height:55px;border-radius:0px 5px 5px 0px"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }else{ ?>

		<style>
        .autocomplete-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .autocomplete-input {
            width: 200px;
            padding: 8px;
        }

        .suggestions-list {
			background-color:white;
			z-index: 999;
			position: absolute;
			width: 100%;
            /* 
           
            max-height: 150px;
            overflow-y: auto;
            border: 1px solid #ccc;
            border-top: none; */
        }

        .suggestion-item {
            padding: 8px;
            cursor: pointer;
            border-bottom: 1px solid #ccc;
        }

        .suggestion-item:hover {
            background-color: #f1f1f1;
        }
    </style>

		<div class="breatcome-area" style="height:600px">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="breatcome-content">
						<div class="breatcome-title">
							<h1  style="text-align:center;font-weight:none;font-size:32px">Portal do Transporte</h1>
							<p style="text-align:center;color:white;font-size:20px;margin-bottom:80px !important; line-height:30px">Faça sua Cotação de Frete com o Maior Portal de Transporte do País.<br> Temos Transportadoras para Todo o Brasil.</p>

						</div>
						<div class="row" style="text-align:center;" >
						<div class="container">
							<div class="col-lg-12 col-md-12"  style="margin:0 !important;padding:0 !important">
								<div class="form-box">
									<input type="text"  id="autocomplete-input-origem" name="name" placeholder="Origem da sua Carga" style="width: 100%;text-align:center;border-radius:5px 0px 0px 5px">
									<div class="col-lg-12 col-md-12 suggestions-list" id="suggestions-list-origem" ></div>

								</div>
							</div>
							<div class="col-lg-12 col-md-12" style="margin:0 !important;padding:0 !important" >
								<div class="form-box">
									<input type="text" id="autocomplete-input-destino" name="name" placeholder="Destino da sua Carga" style="width: 100%;text-align:center;border-radius:0px 0px 0px 0px">
									<div class="col-lg-12 col-md-12 suggestions-list" id="suggestions-list-destino"></div>

								</div>
							</div>
						
							<div class="col-lg-12 col-md-12">
								<div class="form-box-button">
									<button onclick="buscar()" type="Submit" style="border-radius:0px 5px 5px 0px">Solicitar Cotação</button>
								</div>
							</div>
	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php } ?>

	<!--==================================================-->
	<!-- Start Euildint Feature Style Two Area -->
	<!--==================================================-->
	<div class="feature-area style-two animate__slideInUp">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<!--start feature items box -->
					<div class="feature-items-box">
						<div class="feature-icon-box">
							<div class="feature-icon-thumb">
								<img src="assets/images/resource/pino-de-localizacao.png" style="width:70px" alt="">
							</div>
							<div class="feature-numbar">
								<h5>01.</h5>
							</div>
						</div>
						<div class="feature-text">
							<h4><a href="{{url('/')}}/origem-e-destino">Origem e Destino do Transporte</a></h4>
							<a href="{{url('/')}}/origem-e-destino">Preencha a Origem e Destino do Seu Frete<i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
					<!--End feature items box -->
				</div>
				<div class="col-lg-3 col-md-6">
					<!--start feature items box -->
					<div class="feature-items-box">
						<div class="feature-icon-box">
							<div class="feature-icon-thumb">
								<img src="assets/images/resource/search-engine-optimization.png" style="width:70px" alt="">
							</div>
							<div class="feature-numbar">
								<h5>02.</h5>
							</div>
						</div>
						<div class="feature-text">
							<h4><a href="{{url('/')}}/transportadoras">Clique em Buscar Transportadora</a></h4>
							<a href="{{url('/')}}/transportadoras">Encontre sua transportadora ideal <i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
					<!--End feature items box -->
				</div>
				<div class="col-lg-3 col-md-6">
					<!--start feature items box -->
					<div class="feature-items-box">
						<div class="feature-icon-box">
							<div class="feature-icon-thumb">
								<img src="assets/images/resource/solicitacao-de-cotacao.png" style="width:70px" alt="">
							</div>
							<div class="feature-numbar">
								<h5>03.</h5>
							</div>
						</div>
						<div class="feature-text">
							<h4><a href="{{url('/')}}/cotacao-de-frete">Cotação com Transportadoras</a></h4>
							<a href="{{url('/')}}/cotacao-de-frete">Preencha o Formulário de Cotação <i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
					<!--End feature items box -->
				</div>
				<div class="col-lg-3 col-md-6">
					<!--start feature items box -->
					<div class="feature-items-box">
						<div class="feature-icon-box">
							<div class="feature-icon-thumb">
								<img src="assets/images/resource/aviao-de-papel.png" style="width:70px" alt="">
							</div>
							<div class="feature-numbar">
								<h5>04.</h5>
							</div>
						</div>
						<div class="feature-text">
							<h4><a href="#">Aguarde o Retorno Diretamente por E-mail</a></h4>
							<a href="#">Agora Aguarde o Retorno das Transportadoras <i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
					<!--End feature items box -->
				</div>
			</div>
		</div>
	</div>


	<style>
   
    section {
		margin-top:-100px;
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







	<!--==================================================-->
	<!-- End Euildint Feature Style Two Area -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Euildint About Area -->
	<!--==================================================-->
	<div class="about-area style-two">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="about-thumb style-two">
						<img src="assets/images/about/about2.jpg" alt="">
						<!-- statr about counter -->
						<div class="about-counter">
							<div class="about-numbar">
								<h4 class="counter">30</h4>
								<span>+</span>
							</div>
							<div class="about-counter-text">
								<h5>Anos de Experiência no Transporte </h5>
							</div>
						</div>
						<!-- End about counter -->
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="section-title">
						<div class="section-shape">
							<img src="assets/images/about/section-shape.png" alt="">
						</div>
						<div class="section-sub-title">
							<h4>Portal do Transporte</h4>
						</div>
						<div class="section-main-title about">
							<h2>Realize sua Cotação de Frete em Nosso Guia de Transportadoras</h2>						</div>
					</div>
					<div class="about-content">
						<div class="about-discribtion">
							<p>O Portal Transporte é uma plataforma inovadora que atua como um guia abrangente para embarcadores em busca de soluções eficientes de transporte no Brasil. </p>
						</div>
						<!-- start process bar -->
						<div class="process-ber-plugin">
							<span class="process-bar">Embarcadores Satisfeitos </span>
							<div id="bar1" class="barfiller">
								<div class="tipWrap" style="display: inline;">
									<span class="tip" style="left: 468.814px; transition: left 7s ease-in-out 0s;">93%</span>
								</div>
								<span class="fill" data-percentage="93" style="background: rgb(22, 181, 151); width: 505.791px; transition: width 7s ease-in-out 0s;"></span>
							</div>  
							<span class="process-bar">Transportadoras Satisfeitas</span>
							<div id="bar2" class="barfiller">
								<div class="tipWrap" style="display: inline;">
									<span class="tip" style="left: 403.254px; transition: left 7s ease-in-out 0s;">95%</span>
								</div>
								<span class="fill my-class" data-percentage="95" style="background: rgb(22, 181, 151); width: 438.352px; transition: width 7s ease-in-out 0s;"></span>
							</div>
						</div>
						<!-- End process bar -->
						<div class="row">
							<div class="col-lg-6">
								<!--start about single box -->
								<div class="about-single-box">
									<div class="about-icon">
										<img src="assets/images/about/about-icon1.png" alt="">
									</div>
									<div class="about-text">
										<h4>Selo de Qualidade</h4>
									</div>
								</div>
								<!--end about single box -->
							</div>
							<div class="col-lg-6 col-mdd-6">
								<!--start about single box -->
								<div class="about-single-box">
									<div class="about-icon">
										<img src="assets/images/about/about-icon2.png" alt="">
									</div>
									<div class="about-text">
										<h4>Transportadoras Verificadas</h4>
									</div>
								</div>
								<!--end about single box -->
							</div>
						</div>
						<div class="about-bottom">
							<div class="eulding-btn about">
								<a href="{{url('/')}}/cotacao-de-frete">Faça sua Cotação de Frete <i class="bi bi-arrow-up-right-circle-fill"></i></a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Euildint About Area -->
	<!--==================================================-->

	

	


	<!--==================================================-->
	<!-- Start Euildint Brand Area -->
	<!--==================================================-->
	<div class="brand-area" style="background-color:#212529">
		<div class="container-fluid">
		<h2 style="text-align:center;color:white;margin:-50px 0 20px 0" >Nossos Portais Parceiros</h2>

			<div class="row">
				<div class="brand_list owl-carousel">
					<div class="col-lg-12">
						<div class="brand-thumb">
							<a href="https://guiadotransporte.com.br" target="_BLANK"><img src="assets/images/brand/brand1.png" alt="" style="padding-right:50px"></a>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="brand-thumb">
							<a href="https://portaldastransportadoras.com.br" target="_BLANK"><img src="assets/images/brand/brand2.png" alt="" style="padding-right:20px"></a>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="brand-thumb">
							<a href="https://transportadora.com.br" target="_BLANK"><img src="assets/images/brand/brand3.png" alt="" style="padding-right:20px"></a>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Euildint Brand Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start Euildint Blog Area -->
	<!--==================================================-->
	<div class="blog-area ">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- start section title -->
					<div class="section-title text-center">
						<div class="section-shape">
							<img src="assets/images/about/section-shape.png" alt="" >
						</div>
						<div class="section-sub-title">
							<h4>Blog Guia do Transporte</h4>
						</div>
						<div class="section-main-title blog">
							<h2>Saiba Mais Sobre as Últimas Notícias do Transporte</h2>
						</div>
					</div>
					<!-- End section title -->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<!-- start blog single box -->
					<div class="blog-single-box style-two">
						<div class="blog-thumb">
							<img src="assets/images/blog/blog1.png" style="height:250px" alt="">
						</div>
						<div class="blog-content style-two">
							<div class="blog-meta style-two">
								<div class="blog-meta-date">
									<h5>20</h5>
									<span>Nov</span>
								</div>
								<div class="blog-meta-info">
									<span><i class="bi bi-person"></i>Por Vinícius</span>
									<span><i class="bi bi-chat-left"></i>Comentários</span>
								</div>
							</div>
							<div class="blog-title style-two">
								<h4><a href="https://blog.guiadotransporte.com.br/empresas-de-logistica/" TARGET="_BLANK">Empresas de Logística</a></h4>
							</div>
							<div class="blog-bottom">
								<div class="blog-btn style-two">
									<a href="https://blog.guiadotransporte.com.br/empresas-de-logistica/">Saiba Mais</a>
								</div>
								<div class="blog-icon">
									<a href="https://blog.guiadotransporte.com.br/empresas-de-logistica/"><i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- End blog single box -->
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- start blog single box -->
					<div class="blog-single-box style-two">
						<div class="blog-thumb">
							<img src="assets/images/blog/blog2.png" alt="" style="height:250px">
						</div>
						<div class="blog-content style-two">
							<div class="blog-meta style-two">
								<div class="blog-meta-date">
									<h5>20</h5>
									<span>Nov</span>
								</div>
								<div class="blog-meta-info">
									<span><i class="bi bi-person"></i>Por Vinícius</span>
									<span><i class="bi bi-chat-left"></i>Comentários</span>
								</div>
							</div>
							<div class="blog-title style-two">
								<h4><a href="https://blog.guiadotransporte.com.br/o-que-e-cte-transporte/">O que é CTe Transporte?</a></h4>
							</div>
							<div class="blog-bottom">
								<div class="blog-btn style-two">
									<a href="https://blog.guiadotransporte.com.br/o-que-e-cte-transporte/">Saiba Mais</a>
								</div>
								<div class="blog-icon">
									<a href="https://blog.guiadotransporte.com.br/o-que-e-cte-transporte/"><i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- End blog single box -->
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- start blog single box -->
					<div class="blog-single-box style-two">
						<div class="blog-thumb">
							<img src="assets/images/blog/blog3.png" alt="" style="height:250px">
						</div>
						<div class="blog-content style-two">
							<div class="blog-meta style-two">
								<div class="blog-meta-date">
									<h5>20</h5>
									<span>Nov</span>
								</div>
								<div class="blog-meta-info">
									<span><i class="bi bi-person"></i>Por Vinícius</span>
									<span><i class="bi bi-chat-left"></i>Comentários</span>
								</div>
							</div>
							<div class="blog-title style-two">
								<h4><a href="https://blog.guiadotransporte.com.br/as-10-maiores-empresas-de-transporte-do-brasil/">Maior Transportadora do Brasil</a></h4>
							</div>
							<div class="blog-bottom">
								<div class="blog-btn style-two">
									<a href="https://blog.guiadotransporte.com.br/as-10-maiores-empresas-de-transporte-do-brasil/">Saiba Mais</a>
								</div>
								<div class="blog-icon">
									<a href="https://blog.guiadotransporte.com.br/as-10-maiores-empresas-de-transporte-do-brasil/"><i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- End blog single box -->
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Euildint Blog Area -->
	<!--==================================================-->


@include('includes.footer')


 

<script>
    let suggestions;

    // Carregar o arquivo JSON de rotas_cities.json
    $.getJSON('<?php echo url('/'); ?>/json/rotas_cities.json', function(data) {
        suggestions = data.suggestions;

        $("#autocomplete-input-origem, #autocomplete-input-destino").on("input", function () {
            const inputText = $(this).val().toLowerCase();
            const inputId = $(this).attr("id");
            
            if (inputText === '') {
                $(`#suggestions-list-${inputId.split("-").pop()}`).empty();
                return;
            }
            
            const filteredSuggestions = suggestions.filter(suggestion => suggestion.value.toLowerCase().includes(inputText));
            displaySuggestions(filteredSuggestions, inputId);
        });
    });

    function displaySuggestions(suggestions, inputId) {
        const suggestionsListId = `suggestions-list-${inputId.split("-").pop()}`;
        const suggestionsList = $(`#${suggestionsListId}`);
        suggestionsList.empty();

        suggestions.forEach(suggestion => {
            const listItem = $("<div class='suggestion-item'></div>")
                .text(suggestion.value)
                .on("click", function () {
                    $(`#autocomplete-input-${inputId.split("-").pop()}`).val(suggestion.value);
                    suggestionsList.empty();
                });

            suggestionsList.append(listItem);
        });
    }

    function buscar() {
        const origem = encodeURIComponent(getUrlParam($("#autocomplete-input-origem").val()));
        const destino = encodeURIComponent(getUrlParam($("#autocomplete-input-destino").val()));
        const url = `https://transporte.com.br/transportadoras/${origem}/${destino}`;
        window.location.href = url;
    }

    function getUrlParam(city) {
        const suggestion = suggestions.find(s => s.value === city);
        return suggestion ? suggestion.url : '';
    }
</script>