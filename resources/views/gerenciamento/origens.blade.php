@extends('layouts.app')

@section('content')


  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- / Layout page -->
        <div class="layout-page">
          <!-- Content wrapper -->
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <!-- Painel Pendencias-->
                        <div class="col-6">
                        <div class="card">
                            <h5 class="card-header">Pendencias</h5>
                            <div class="table">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                <th>---</th>
                                <th>Venc.</th>
                                <th>Hoje</th>
                                <th>Mes</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr> 
                                    <td>Atualização Pendente</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>  
                                </tr>
                                <tr> 
                                    <td>Aprovação Pendente</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>  
                                </tr>
                                <tr> 
                                    <td>Envio de Documentos Pendente</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>  
                                </tr>
                                <tr> 
                                    <td>Pagamento Pendente</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>  
                                </tr>
                                <tr> 
                                    <td>Entradas Pendentes</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>  
                                </tr>
                                <tr> 
                                    <td>Auditorias Entrada Pendentes</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>  
                                </tr>
                                <tr> 
                                    <td>Auditorias Saida Pendentes</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td> 
                                </tr>                  
                                </tbody>
                                <tfoot>
                                
                                </tfoot>
                            </table>
                            </div>
                        </div>
                    </div>
                    <!-- Painel Faturamento-->
                    <div class="col-6">
                        <div class="card">
                            <h5 class="card-header">Faturamento em Mãos</h5>                    
                                <div class="table">                     
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                    <th>---</th>
                                    <th>Valor</th>
                                    <th>Aporte</th>
                                    <th>Retirada</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <tr> 
                                        <td>Forma de Pagamento</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>  
                                    </tr> 
                                        
                                    </tbody>
                                    <tfoot>
                                        <td>Total</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tfoot>
                                </table> 
                                </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                
                    </div>
                </div>
            </div>
        </div>    
     <!-- / .Content wrapper -->
    </div>   
<!-- / .Layout page -->
</div>
      
@endsection

