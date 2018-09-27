<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" >
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
                height: 300px;
                font-family: monospace;
                text-align: left;
            }
        </style>    
    </head>
    <body>
        
        <!--inicio Container -->
        <div class="container">
          <!--Row -->
          <div class="row" style="margin-top:30px">
                <!--inicio col-2 -->
                <div class="col-6">
                
                     <div class="card text-center" id="card-produtos">
                        <div class="card-header">
                          Cupom Fiscal
                        </div>
                        <div class="card-body">
                          1 -sanduiche  de presunto ........$2,50
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
                         <p class="valor">R$: 50,45</p>
                       </div>
                     </div>
                      <!--Card -->
                 <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Codigo de Barra"  >
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa fa-barcode" aria-hidden="true"></i>
                      </button>
                    </div>
                 </div>
                  <div class="input-group mb-3" >
                    <input type="text" class="form-control" placeholder="Nome Produto"  >
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
                    </div>
                 </div>
                 <button type="button" class="btn btn-info">Estorno</button>
                 <button type="button" class="btn btn-success">Pagar</button>
                 <button type="button" class="btn btn-danger">Cencelar</button>
                </div>
                <!--fimcol-2 -->
              </div>
             <!--Fim Row -->
        </div>
        <!--Fim Container -->  
    </body>
</html>
