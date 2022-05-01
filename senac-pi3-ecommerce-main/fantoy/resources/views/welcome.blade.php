@extends('layouts.store')
@section('css')
<style>
  #banner {
    background-image: url("/img/wbg1.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    min-height: 1000px;
  }
</style>
@endsection
@section('banner')
<section id="banner" class="row d-flex align-items-center px-5">
  <div>
    <span class="h1 d-block mb-5" style="color: white">Receba box exclusivos com vinhos incríveis</span>
  </div>
  <div>
    <span class="h3 d-block fw-bold" style="color: #cc9900; margin-top: -470px">Um clube de exclusividades!</span>
    <span class="h3 d-block fw-bold" style="color: #cc9900;">Vinhos ricos em histórias inspiradoras e sabores surpreendentes!</span>    
  </div>
</section>
@endsection

@section('content')
<div class="row mb-4 m-2">
  <div class="col-sm-3">
    <div class="card mt-2" style="box-shadow: 0px 0px 15px 0px #30092a; border-radius: 16px">
      <div class="card-body">
        <img  id="box1" class="card-img-top img-responsive" src="img/p2.jpg" />        
        <h3 class="card-title">BOX</h3>
        <h3 class="card-title"> DESCOBERTAS</h3>
        <h6 class="card-text" id="mktColor">Próximo passo para a evolução da sua experiência enológica.</h6>
        <a class="btn btn-primary fw-bold mt-3" href="#" role="button" style="color: white; background: #30092a; border: none; padding: 15px; border-radius: 12px;">Assine!</a>     
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card mt-2" style="box-shadow: 0px 0px 15px 0px #30092a; border-radius: 16px">
      <div class="card-body">
        <img  id="box1" class="card-img-top img-responsive" src="img/p3.jpg" />          
        <h3 class="card-title">BOX</h3>
        <h3 class="card-title">GRANDES VINHOS</h3>
        <h6 class="card-text" id="mktColor">Experiência com rótulos singulares e sabores surpreendentes.</h6>
        <a class="btn btn-primary h5 fw-bold mt-3" href="#" role="button" style="color: white; background: #30092a; border: none; padding: 15px; border-radius: 12px;">Assine!</a>     
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card mt-2" style="box-shadow: 0px 0px 15px 0px #30092a; border-radius: 16px">
      <div class="card-body">
        <img  id="box1" class="card-img-top img-responsive" src="img/wbg2.jpg"/> 
        <h3 class="card-title">BOX</h3>
        <h3 class="card-title">OBRAS PRIMAS</h3>
        <h6 class="card-text" id="mktColor">Vinhos únicos, com alto prestígio e produtores consagrados</h6>
        <a class="btn btn-primary h5 fw-bold mt-3" href="#" role="button" style="color: white; background: #30092a; border: none; padding: 15px; border-radius: 12px;">Assine!</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card mt-2" style="box-shadow: 0px 0px 15px 0px #30092a; border-radius: 16px">
      <div class="card-body">
        <img  id="box1" class="card-img-top img-responsive" src="img/b3.jpg"/>         
        <h3 class="card-title">BOX</h3>
        <h3 class="card-title">MAGNA</h3>
        <h6 class="card-text" id="mktColor">Vinhos de alto padrão escolhidos para agradar os paladares mais experientes.</h6>
        <a class="btn btn-primary h5 fw-bold mt-3" href="#" role="button" style="color: white; background: #30092a; border: none; padding: 15px; border-radius: 12px;">Assine!</a>
      </div>
    </div>
  </div>
</div>
<div style="background:#30092a; color:white; height: 100px;">
  <h1 class="text-center mt-5;">A EXPERIÊNCIA DO CLUBE</h1>
  <h6 class="text-center mt-3;">Além de vinhos inéditos, o associado tem acesso a diversos benefícios</h6>
</div>
<div id="tema1" class="container">
  <div id="tema2" class="row p-4">
    <div class="col-3 p-4">
      <img src="img/rolha.jpg" ; style="box-shadow: 0px 0px 15px 0px #30092a;border-radius: 16px">
    </div>
    <div class="col-xs-12 col-md-4 p-4">
      <div id="tema3" class="col-12 mt-5">
        <h3>PROGRAMA SACA-ROLHA</h3>
        <h6>Leve seus vinhos aos restaurantes participantes e a taxa de rolha fica por nossa conta</h6>
      </div>
    </div>
    <div id="tema2" class="row p-4">
      <div class="col-3 p-4">
        <img src="img/b6.jpg" ; style="box-shadow: 0px 0px 15px 0px #30092a;border-radius: 16px; width:256px;height:197px">
      </div>
      <div class="col-xs-12 col-md-4 p-4">
        <div id="tema3" class="col-12 mt-4">
          <h3>JANTARES HARMONIZADOS</h3>
          <h6>Todos os meses, encontro com nosso sommelier para degustar e enriquecer seu repertório gastronômico</h6>
        </div>
      </div>
      <div id="tema2" class="row p-4">
        <div class="col-3 p-4">
          <img src="img/b4.jpg" ; style="box-shadow: 0px 0px 15px 0px #30092a;border-radius: 16px;width:256px;height:197px">
        </div>
        <div class="col-xs-12 col-md-4 p-4">
          <div id="tema3" class="col-12 mt-4">
            <h3>CUSTOMIZAÇÃO DA BOX</h3>
            <h6>Quer presentear alguém com um box exclusivo, escolha os rótulos que vão compor seu presente. </h6>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>
      <div style="background:#30092a; color:white; height: 100px;">
        <h1 class="text-center mt-5;">ÚLTIMAS NOTÍCIAS</h1>
        <h6 class="text-center mt-3;">As novidades do mundo do vinho especialmente para você</h6>
      </div>
      <div class="container m-t-md mt-5">
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <article id="cardBlog" class="card">
              <img class="card-img-top img-responsive" src="img/blo1.jpg" />
              <div class="card-block">
                <h4 class="card-title text-center mt-2">Como preparar uma noite de queijo e vinho?</h4>
                <p class="card-text mt-3">Que queijo combina com vinho, todo mundo já sabe. 
                  Preparar uma tábua com queijos para degustar com vinho é uma maneira elegante de fazer reunião com amigos, familiares ou companheiro. 
                  Em clima frio, é melhor ainda! Para que a sua noite de queijo e vinho seja bem planejada, selecionamos algumas dicas para você seguir e para que nada dê errado!</p>                
              </div>
            </article>
          </div>
          <div class="col-xs-12 col-md-4">            
            <article id="cardBlog" class="card">
              <div class="card-block">
                <h4 class="card-title text-center">Vinhos em lata ganham a atenção de jovens na França.</h4>
                <p class="card-text  mt-3">Um dos países mais tradicionais do vinho, a França, tem recebido bem a novidade dos vinhos em lata. 
                  Apesar de existir ainda algum preconceito com o novo formato, existe um grande…</p>
              </div>
              <img class="img-responsive  mt-3" src="img/blo2.jpeg"/>              
            </article>
          </div> 
          <div class="col-sm-12 col-md-4">
            <article id="cardBlog" class="card">
              <img class="card-img-top img-responsive" src="img/blo3.jpg" />
              <div class="card-block">
                <h4 class="card-title text-center mt-3">Consumo de vinhos "Superpremium" cresce no Brasil</h4>
                <p class="card-text mt-2">Os vinhos “superpremium”, com preços acima dos R$ 160 por garrafa, apresentaram crescimento de 14% nas importações, 
                  com destaque para italianos e franceses. Por isso, são os vinhos mais caros que apontam para um horizonte promissor em 2022…</p>                
              </div>
            </article>
          </div>            
      </div>
    </div>
@endsection