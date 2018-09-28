<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" >
        
        <script src="js/jquery-3.3.1.js" type="text/javascript"> </script>
        <script src="js/bootstrap.js" type="text/javascript"> </script>
        <script src="js/typeahead.jquery.js" type="text/javascript"></script>
        
        <script src="js/pdv.js" type="text/javascript"> </script>
        <style>
            #card-totalpagar .card-title{
                font-size: small;
                margin: 0;
                
            }
            #card-totalpagar .valor{
                font-size: 22pt;
                margin: 0;
            }
            #card-produtos .card-body{
                min-height:300px;
                font-family: monospace;
                text-align: left;
            }
        
        </style>    
    </head>
    <body>
        
        <!--inicio Container -->
        <div class="container">
          
          <!--Row -->
          <div class="row" style="margin-top:30px;">
                <!--inicio col-2 -->
                <div class="col-6">
                
                     <div class="card text-center" id="card-produtos">
                        <div class="card-header">
                          Cupom Fiscal
                        </div>
                        <div class="card-body">
                            <ol>
                                <li>1 -sanduiche  de presunto ........$2,50</li>
                            </ol>
                        </div>
                     </div>
                </div>
                <!--fimcol-1 -->
                <!--inicio col-2 -->
                <div class="col-6">
                          <!--Card -->
                    <div class="card text-white bg-danger mb-3" id="card-totalpagar">
                       <div class="card-body">
                         <h5 class="card-title">Total a Pagar</h5>
                         <p class="valor">R$ 00,00</p>
                       </div>
                     </div>
                      <!--Card -->
                 <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Codigo de Barra" id="input-codbarra">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" id="btn-codbarra"><i class="fa fa-barcode" aria-hidden="true"></i>
                      </button>
                    </div>
                 </div>
                  <div class="input-group mb-3" >
                    <input type="text" class="form-control" placeholder="Nome Produto" id="input-produto"  >
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" id="btn-produto"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
                    </div>
                 </div>
                 <button type="button" class="btn btn-info">Estorno</button>
                 <button type="button" class="btn btn-success">Pagar</button>
                 <button type="button" class="btn btn-danger" id="btn-danger" data-toggle="modal" data-target="#modal-cancelar">Cencelar</button>
                </div>
                <!--fimcol-2 -->
              </div>
             <!--Fim Row -->
        </div>
        <!--Fim Container --> 
             <!-- Modal -->
            <div class="modal fade alert" id="modal-codbarra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Atenção</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <i class="fa fa-exclamation-triangle text-warning"  aria-hidden="true" style="font-size:26pt;"></i>  
                    Codigo de Barra Não Encontrado
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Fechar</button>
                   
                  </div>
                </div>
              </div>
             
             <!-- Modal -->
            <div class="modal fade alert" id="modal-cancelar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Atenção</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <i class="fa fa-exclamation-triangle text-warning"  aria-hidden="true" style="font-size:26pt;"></i>  
                   Deseja cancelar a venda?
                  </div>
                  <div class="modal-footer" id="modal-cancelar">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Sim</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Não</button>
                   
                  </div>
                </div>
              </div>   
    </body>
</html>
