@include('includes.top')




<?php

//echo $json->data[1]->url;

//echo $json_details;

$companies_url  = $companies;
$companies_json = $json->data[1]->url;


$pos = strpos( $companies_url, $companies_json ).'<br>';



//$transp_details = file_get_contents('https://cargas.com.br/api/companies/'.$companies_json);
//$json_details = json_decode($transp_details);

//print_r($json_details->adresses[0]->street);


//$company_name = substr($json->data[1]->url, 0, -15);

?>
@for($i=0;$i<=count($json->data)-1;$i++)
    @if(substr($json->data[$i]->url, 0, -15) == $companies)
        @php
            $companies_json_two = $json->data[$i]->url;
            $transp_details = file_get_contents('https://cargas.com.br/api/companies/'.$json->data[$i]->url);
            $json_details = json_decode($transp_details);
        @endphp

<div class="blog-single-area bg de-padding" style="margin-top:100px">


            <div class="container">
                <div class="blog-single-wpr">
                    <div class="row ps g-5">
                    <div class="col-xl-4">
                            <aside class="sidebar">
                                <!-- Search-->

                                 <!-- Category -->
                                 <div class="widget-categories-box">
                                    <div class="category-list">
                                        
                                                    
                                                    <img src="{{$json->data[$i]->logo}}" style="display:block;margin-left:auto;margin-right:auto;width:100px;text-align:center; border-radius:50%" alt="{{$json->data[$i]->fantasy_name}}" title="{{$json->data[$i]->fantasy_name}}" >
													<div class="widget-catagories-title">
														<h4>{{$json->data[$i]->fantasy_name}}</h4>
													</div>                                        
													<div class="eulding-btn about">
								<a href="<?php echo url('/');?>/cotacao-de-frete">Faça sua Cotação de Frete <i class="bi bi-arrow-up-right-circle-fill"></i></a>
							</div>
                                    </div>
                                </div>

                                <!-- Recent Post -->
                                <div class="widget-categories-box">
								<div class="widget-catagories-title">
														<h4>Localização</h4>
													</div>       
									<div class="recent-post-single">
										<div class="recent-post-pic">
                                        <i class="icofont-ui-map"></i>
										</div>
										<div class="recent-post-bio">
											<span>
                                            {{$json_details->adresses[0]->street}}
											</span>
										</div>
									</div>
									
									
								</div>

					

								
                            </aside>
                        </div>
                        <div class="col-xl-8">
                            <div class="widget-categories-box">
                                <div class="theme-info">
                                    <div class="theme-desc">
									<div class="widget-catagories-title">
									<h4>Sobre a Empresa {{$json->data[$i]->fantasy_name}}</h4>
									</div>       
										<div class="theme-meta">
											
										
										</div>
                                        <p class="mb-30">@if($json->data[$i]->about){{$json->data[$i]->about}} @else Esta empresa não possui descrição. @endif</p>
                                       
										
								
                                    </div>
                                </div>
                            </div>
                            <div class="widget-categories-box">
								<div class="widget-catagories-title">
								<h4 class="single-content-title">Números de Telefone</h4>
								</div>
								<div class="single-commentor">

									<ul>


									<div class="row">
										<div class="col-md-6">
												<div class="col-md-6 single-commentor-user">
													<div class="single-commentor-user-bio">
														<div class="single-commentor-user-bio-head">
														<h5><i class="icofont-ui-cell-phone"></i> Celular </h5>
														</div>
														<p>
														{{$json_details->adresses[0]->phone}}
														</p>
																											
													</div>
												</div>
										</div>
										<div class="col-md-6">
													<div class="col-md-6 single-commentor-user">
														<div class="single-commentor-user-bio">
															<div class="single-commentor-user-bio-head">
																<h5><i class="icofont-brand-whatsapp"></i>WhatsApp</h5>
															</div>
															<p>
															 {{$json_details->adresses[0]->whatsapp}}
															</p>											
														</div>
													</div>
											</div>
										</div>
										<div class="widget-catagories-title">
										<h4 class="single-content-title">Informações de Contato</h4>
										</div>
										<div class="row">
										<div class="col-md-6">
												<div class="col-md-6 single-commentor-user">
													<div class="single-commentor-user-bio">
														<div class="single-commentor-user-bio-head">
															<h5><i class="fa fa-email"></i>E-mail </h5>
														</div>
														<p>
														 {{$json_details->adresses[0]->email}}
														</p>
																											
													</div>
												</div>
										</div>
										<div class="col-md-6">
													<div class="col-md-6 single-commentor-user">
														<div class="single-commentor-user-bio">
															<div class="single-commentor-user-bio-head">
																<h5><i class="icofont-ui-email"></i> Site</h5>
															</div>
															<p>
															<a href="{{$json_details->site}}"> {{$json_details->site}}</a>
															</p>											
														</div>
													</div>
											</div>
										</div>


									</ul>
								</div>
								
							</div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        @endif
@endfor
@include('../includes.footer')




















