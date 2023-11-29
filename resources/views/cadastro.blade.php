@include('includes.top')

<div class="row g-5" style="margin:50px">

  <div class="row">
            <div class="col-xl-6 offset-xl-3">
              <div class="site-title text-center">
                <h2>Entre em Contato</h2>
                <p class="mb-0">
                  Faça sua cotação de frete totalmente gratuita e receba respostas de transportadoras diretamente por E-mail.
                </p>
              </div>
            </div>
          </div>
						<div class="col-xl-8 offset-xl-2">
							<div class="contact-ads">
								<form class="contact-form" method="post" action="assets/mail/contact.php">

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control input-style-2" name="fname" placeholder="Cidade de Origem">
											<span class="alert alert-error"></span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" class="form-control input-style-2" name="email" placeholder="Cidade de Destino">
											<span class="alert alert-error"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input type="text" class="form-control input-style-2" name="phone" placeholder="Nome">
											<span class="alert alert-error"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input type="email" class="form-control input-style-2" name="web" placeholder="Telefone">
											<span class="alert alert-error"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input type="email" class="form-control input-style-2" name="web" placeholder="E-mail">
											<span class="alert alert-error"></span>
										</div>
									</div>

									<div class="col-md-12">
										<textarea class="form-control input-style-2" name="message" placeholder="Your Message..."></textarea>
										<div class="contact-sub-btn text-center">
											<button type="submit" name="submit" id="submit" class="btn-4">
                        Cadastrar Empresa
												<i class="fas fa-chevron-right"></i>
											</button>
										</div>
										<!-- Alert Message -->
										<div class="alert-notification">
											<div id="message" class="alert-msg"></div>
										</div>
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>

@include('includes.footer')
