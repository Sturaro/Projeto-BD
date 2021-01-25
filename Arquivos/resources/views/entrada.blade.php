<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<head>
    <title>Entrada</title>
    <link rel=stylesheet href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>

<div id="main" class="container-fluid">

    <div id="top" class="row">
        <div class="col-md-3">
            <h2>Músicas</h2>
        </div>
 
        <div class="col-md-6">
        </div>
 
        <div class="col-md-3">
            <a href="adicionar" class="btn btn-primary pull-right h2">Novo Item</a>
        </div>
    </div> <!-- /#top -->
 
    <hr/>
        <div id="list" class="row">
            <div class="table-responsive col-md-12">
                <table class="table table-striped" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Duracao</th>
                            <th class="actions">Ações</th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        <td>0</td>
                        <td>Bandid*</td>
                        <td>2:33</td>
                        <td class="actions">
                            <a class="btn btn-success btn-xs" href="visualizar">Visualizar</a>
                            <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                            <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                        </td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Say So</td>
                        <td>3:55</td>
                        <td class="actions">
                        <a class="btn btn-success btn-xs" href="visualizar">Visualizar</a>
                            <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                            <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Vou Morrer Sozinho</td>
                        <td>3:06</td>
                        <td class="actions">
                        <a class="btn btn-success btn-xs" href="visualizar">Visualizar</a>
                            <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                            <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> <!-- /#list -->
 
    <div id="bottom" class="row">
    <!-- 
    -->
    </div> <!-- /#bottom -->
    
</div>  <!-- /#main -->

</body>
</html>