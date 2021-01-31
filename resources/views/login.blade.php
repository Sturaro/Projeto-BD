@extends('templates.template')

@section('content')
<div class="container">
    <div class="verti">
        <h3 class="text-center">Login</h3>
        <input class="text-center type="text" placeholder="Usuário"> 
        <input class="text-center type="text" placeholder="Senha">
        <a href="entrada" class="btn btn-primary pull-right h2">Entrar</a>
<!-- 
    <form action="entrada">
     <input type="submit" value="Entrar" />
     </form>
-->
    </div>
</div>


<style>
.verti {
height: 200px;
width: 300px;
margin: auto;
margin-top: 14%;
align-items: center;
display: flex;
flex-direction: column;
justify-content: space-evenly;
background: #F2F2F2}
.container {
width: 100vw;
height: 100vh;
/*
background: #6C7A89;
*/
display: flex;
flex-direction: row;
justify-content: center;
align-items: center}

</style>
@endsection

