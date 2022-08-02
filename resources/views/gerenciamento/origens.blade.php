@extends('layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Origens</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <h5>Filtros:</h5>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body row">
                        <div class="d-flex">
                            <div class="col-6 mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Status:</label>
                            <select class="form-control" aria-label="Default select example">
                                <option selected>Selecione um Status</option>
                                <option value="1">Ativo</option>
                                <option value="2">Inativo</option>
                            </select>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Tipo:</label>
                            <select class="form-control" aria-label="Default select example">
                                <option selected>Selecione um Tipo</option>
                                <option value="Entrada/Saida">Entrada/Saida</option>
                                <option value="1">Entrada</option>
                                <option value="2">Saida</option>
                            </select>
                            </div>
                            <div class="col-6 mb-3">
                            <label class="form-label">Atividade</label>
                            <select class="form-control" aria-label="Default select example">
                                <option value="33">2222</option>
                            </select>
                            </div>
                        </div>
                        </div>
                    <!-- / card-footer -->
                    <div class="card-footer">
                        <div class="mb-1" align="left">
                            <label class="form-label">
                                <button class="btn btn-primary">Cadastrar Origem</button>
                            </label>
                            <label class="form-label">
                                <button class="btn btn-primary">Aplicar Filtro</button>
                            </label>
                        </div>
                    </div>
                </div>  
            <!-- /.card -->
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Origens Cadastradas</h3>
  
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
  
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>Nome</th>
                        <th>Status</th>
                        <th>Meta</th>
                        <th>Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>183</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td><span class="tag tag-success">Approved</span></td>
                      </tr>
                      <tr>
                        <td>219</td>
                        <td>Alexander Pierce</td>
                        <td>11-7-2014</td>
                        <td><span class="tag tag-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <td>657</td>
                        <td>Bob Doe</td>
                        <td>11-7-2014</td>
                        <td><span class="tag tag-primary">Approved</span></td>
                      </tr>
                      <tr>
                        <td>175</td>
                        <td>Mike Doe</td>
                        <td>11-7-2014</td>
                        <td><span class="tag tag-danger">Denied</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                </div>
               <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    
      
@endsection

