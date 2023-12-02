<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


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
<div class="row contact" style="margin-top:20px">
				<div class="contact-box">
					<div class="contact-title">
						<h2>Solicite sua Cotação de Frete</h2>
						<p>Faça sua cotação de frete totalmente gratuita e receba respostas de transportadoras diretamente por E-mail.
</p>
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
                <div class="form-box">
                    <input id="autocomplete-input-origem" type="text" class="form-control input-style-2" name="origin" placeholder="Cidade de Origem">
                    <div class="col-lg-12 col-md-12 suggestions-list" id="suggestions-list-origem" ></div>
                    <input type="hidden" id="origin_id" name="origin_id">
                    <!-- <span class="alert alert-error"></span> -->
                </div>
            </div>

            <div class="col-6">
                <div class="form-box">
                    <input id="autocomplete-input-destino" type="text"  class="form-control input-style-2" name="destination" placeholder="Cidade de Destino">
                    <div class="col-lg-12 col-md-12 suggestions-list" id="suggestions-list-destino" ></div>
                    <input type="hidden" id="destination_id" name="destination_id">
                    <!-- <span class="alert alert-error"></span> -->
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
