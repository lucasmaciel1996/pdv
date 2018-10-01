$(document).ready(function(){
    var valorTotal =0;
    var produtoscadastrados=[];
     var produtosCupom = [];
    
     $.getJSON('model/produto/listar.php',function(data){
         produtoscadastrados=data;
        // console.log("GET"+produtoscadastrados);
     });//fimJson
     //pesquisar produto
    function pesquisaProduto(pesquisa,cb)
    {  
      
       var lista = produtoscadastrados.filter(function(el){
         if(el.descricao.search(pesquisa)>=0)
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
    
   // $('input-codbarras').keydown()
    
    
   
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
       var valor_produto = parseFloat(produto.preco);
      var html='<li>'+produto.descricao+'.......................R$'+produto.preco.replace('.',',')+'</li>';
        $('#card-produtos ol').append(html);

        valorTotal +=valor_produto;

        //console.log(valorTotal);

        $("#input-codbarra").val('');
        $('#input-produto').typeahead('val','');
        
        $('#card-totalpagar .valor').html("R$ "+valorTotal); 
   }
   
   $('#bnt-cancelar-sim').click(function(){
       window.location.reload();
   });//fim click
    
     $("#input-codbarras").keydown(function(ev){
         if(ev.keyCode == 13)
         {
             $("#btn-codbarras").click();
         }
     }); //fim do keydown do input
     
     
     $('body').keydown(function(ev){
         
         
         
         if (ev.keyCode == 116)
         {   ev.preventDefault();
             $("#input-codbarras").focus();
         }
         
         if (ev.keyCode == 117)
         {  
             ev.preventDefault();
             $("#input-produto").focus();
         }
             
     }) // fim do keydown body
   //realizar pagamento
        $("#btn-pagar-sim").click(function(){
         
         var dados = {
            cupom: produtosCupom,
            total: valorTotal
         };
         
         $.post("model/pag/pagamento.php", dados, function(retorno){
             
             if (retorno == "true")
             {
                 alert("Pagamento Concluido");
                 window.location.reload();
             } else {
                 alert("Ocoreu um problema ao pagar");
             }
             
         }); //Fim do post
         
     });
});
