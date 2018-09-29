$(document).ready(function(){
    var valorTotal =0;
    var produtoscadastrados=[];
     $.getJSON('model/produtos.json',function(data){
         produtoscadastrados=data;
     });//fimJson
     //pesquisar produto
    function pesquisaProduto(pesquisa,cb)
    {  
      
       var lista = produtoscadastrados.filter(function(el){
         if(el.nome.search(pesquisa)>=0)
         {
            return true; 
         }else{
            return false;
         }
             
      });
      //retorna cb resutlado da fucão callback
     cb(lista);
    }

    //autocomplete
    $('#input-produto').typeahead({
     minLength: 2,
     highlight: true
    },
    {
     name:'produtos',
     source:pesquisaProduto,
     display:'nome'
    });
    //Evento Select
    $('#input-produto').bind('typeahead:select',function(ev,valor){
       //console.log(ev,valor);
          addProduto(valor);
    });//fim :select
    
    $('input-codbarras').keydown()
    
    
   
    //add codigo de barra
   $('#btn-codbarra').click(function(){
       var cod = $('#input-codbarra').val();
       //console.log(cod);
       
          var res= produtoscadastrados.find(function(el){
              return el.id ==cod;
          });//fimfind
          if(res==undefined){
              $('#modal-codbarra').modal('show');
          }
          else{
            addProduto(res); 
          }
   });//fim btn-codbarra 
   function addProduto(produto)
   {
      var html='<li>'+produto.nome+'.......................R$'+produto.preco.toFixed(2).replace('.',',')+'</li>';
        $('#card-produtos ol').append(html);

        valorTotal += produto.preco;

        //console.log(valorTotal);

        $("#input-codbarra").val('');
        $('#input-produto').typeahead('val','');
        $('#card-totalpagar .valor').html("R$ "+valorTotal.toFixed(2).replace('.',','));     
   }
   
   $('#bnt-cancelar-sim').click(function(){
       window.location.reload();
   });//fim click
   
});
