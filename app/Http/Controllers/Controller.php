<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homeIndex(Request $request){
    $transp = file_get_contents("https://cargas.com.br/api/cities/most-used-routes?limit=30");
    $json = json_decode($transp);
      return view('site', ['json'=>$json]);
    }
    public function aboutUs(){
      return view('sobre-nos');
    }
    public function routes(Request $request){
      $transp = file_get_contents("https://cargas.com.br/api/cities/most-used-routes?limit=30");
      
      $json = json_decode($transp);
      return view('rotas',['json'=>$json]);
    }
    public function companies(Request $request){

      $transp = file_get_contents("https://cargas.com.br/api/companies?page=".$request->page);
      $json = json_decode($transp);
      //$json_count = count($json->data);
      //$json_test['json_test'] = $json;
      //$session =  Http::get('https://cargas.com.br/api/companies?page='.$request->page);
      //return new Paginator($session['data'], 12);
      return view('transportadoras',['json'=> $json]);
    }
    public function cotation(){
      return view('cotacao-de-frete');
    }
    public function register(){
      return view('cadastro');
    }
    public function transportadorasCotacao($origin, $destination){
      $data_category = [
        'origin' => $origin,
        'destination' => $destination
      ];
      //$data['origin'] = $origin.','.$destination;
      return view('transportadoras-cotacao', $data_category);
    }
    public function sendQuotation(){
      return view('cotacao-enviada');
    }
    public function companiesPerfil($companies){
      $transp = file_get_contents('https://cargas.com.br/api/companies?limit=500');
      //$transp_details = file_get_contents('https://cargas.com.br/api/companies/'.$companies);
      $json = json_decode($transp);
      //$json_details = json_decode($transp_details);
      return view('perfil-transportadoras',['json'=>$json,'companies'=>$companies]);
    }
    public function quotationApi(Request $request){
      
      //return $request->all();
      Http::withHeaders([
        'Accept' => 'application/json',
        'content-type' => 'application/json'
        ])->post('https://cargas.com.br/api/quotation',[
        'origin'=>$request->origin,
        'destination'=>$request->destination,
        'origin_id'=>$request->origin_id,
        'destination_id'=>$request->destination_id,
        'note_cost'=>$request->note_cost,
        'from'=>'transporte.com.br',
        'quantity'=>$request->quantity,
        'weight'=>$request->weight,
        'description'=>$request->description,
        'type'=>$request->type,
        'client'=>['name'=>$request->name,'email'=>$request->email,'phone'=>$request->phone]
      ]);
      //return $quotation;
      return redirect()->route('sendQuotation');


      //return view('cotation',['quotation'=>json_decode($quotation)])->withInput($request->all());
      // return dd(json_decode($quotation));
    }
}