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
     
    }

    //autocomplete
    $('#input-produto').typeahead({
     minLength: 3,
     highlight: true
    },
    {
     name:'produtos',
     source:pesquisaProduto
    });
    
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
              var html='<li>'+res.nome+'...............R$'+res.preco.toFixed(2).replace('.',',')+'</li>';
              $('#card-produtos ol').append(html);
              
              valorTotal += res.preco;
              
              //console.log(valorTotal);
              
              $("#input-codbarra").val('');
              $('#card-totalpagar .valor').html("R$ "+valorTotal.toFixed(2).replace('.',','));   
          }
   });//fim btn-codbarra 
});
