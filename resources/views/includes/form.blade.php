
	<!-- Place favicon.ico in the root directory -->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png"> -->
	<!-- ========== Start Stylesheet ========== -->
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
            border:1px solid #eaeaea;
            border-radius:20px
			z-index: 999;
			position: absolute;
			width: 36%;
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






    
<div class="container">
<div class="row contact" style="margin-top:25px">
				<div class="contact-box">
					<div class="contact-title">
<?php
if (isset($json) && is_array($json)) {
    foreach($json as $routes){
        if($routes->origin->url == $origin && $routes->destination->url == $destination){
?>

<h2 style="font-size:30px">Transportadoras de {{$routes->origin->value}} para {{$routes->destination->value}}</h2>
<p style="text-align:center">Faça sua cotação de frete totalmente gratuita e receba respostas de transportadoras diretamente por E-mail.</p>

<?php
	break;
        }
    }
}else{
?>
<h2 style="font-size:25px">Solicitar Cotação de Frete</h2>
<p style="text-align:center">Faça sua cotação de frete totalmente gratuita e receba respostas de transportadoras diretamente por E-mail.</p>
<?php } ?>
					</div>



                    <form class="" method="post" action="{{route('quotationApi')}}">
        @csrf

        <div class="row">


            <div class="col-12">
                <div class="form-box">
                    <select type="text" class="form-control input-style-2" placeholder="Origem" name="type" style="margin-bottom:25px">
                        <!-- <option>Selecione o Tipo de Transporte</option> -->
                        <option value="1">Transporte de Carga</option>
                        <!-- <option>Mudanças</option>
												<option>Transporte de Veículos</option> -->
                    </select>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <input autocomplete="off" type="text" id="origin" class="form-control input-style-2" name="origin" placeholder="Cidade de Origem" data-gtm-form-interact-field-id="0">
                    <input type="hidden" id="origin_id" name="origin_id">
                    <span class="alert alert-error"></span>
                </div>
            </div>

            <div class="col-6">
            <div class="form-group">
                    <input autocomplete="off" type="text" id="destination" class="form-control input-style-2" name="destination" placeholder="Cidade de Destino">
                    <input type="hidden" id="destination_id" name="destination_id">
                    <span class="alert alert-error"></span>
                </div>
            </div>


            <div class="col-4">
                <div class="form-box">
                    <input type="text" class="form-control input-style-2" name="note_cost" placeholder="VL. Nota em R$" onKeyPress="return(moeda(this,'.',',',event))">
                    <span class="alert alert-error"></span>
                </div>
            </div>
            <div class="col-4">
                <div class="form-box">
                    <input type="number" class="form-control input-style-2" name="quantity" placeholder="Quantidade">
                    <span class="alert alert-error"></span>
                </div>
            </div>
            <div class="col-4">
                <div class="form-box">
                    <input type="text" class="form-control input-style-2" name="weight" placeholder="Peso (KG)" onKeyPress="return(moeda(this,'.',',',event))">
                    <span class="alert alert-error"></span>
                </div>
            </div>



            <div class="col-md-4 col-12">
                <div class="form-box">
                    <input type="text" class="form-control input-style-2" name="name" placeholder="Nome">
                    <span class="alert alert-error"></span>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="form-box">
                    <input type="text" class="form-control input-style-2" name="phone" placeholder="Telefone">
                    <span class="alert alert-error"></span>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="form-box">
                    <input type="email" class="form-control input-style-2" name="email" placeholder="E-mail">
                    <span class="alert alert-error"></span>
                </div>
            </div>

            <div class="col-12">
            <div class="form-box">
                <textarea class="form-control input-style-2" name="description" placeholder="Observações (Peso, quantidade de volumes, medidas, valor NF. Caso seja mudança favor enviar a relação dos móveis a serem transportados.)
"></textarea>
</div>
                <div class="form-box-button inner">
                    <button type="submit" name="submit" id="submit" class="btn-4" style="margin:25px 0 25px 0">
                        Enviar Cotação
                        <i class="fas fa-chevron-right"></i>
                    </button>

                    <!-- <input type="submit" value="Submit"> -->
                </div>
                <!-- Alert Message -->
    </form>
					<div id="status"></div>
				</div>
			</div>
</div>









