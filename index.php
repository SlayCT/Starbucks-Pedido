<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $nome = $_POST["nome"] ?? '';
    $bebida = $_POST["bebida"] ?? '';
    $adicional = $_POST["adicional"] ?? '';
    $gelo = $_POST["gelo"] ?? '';
    $acompanhamento = $_POST["acompanhamento"] ?? '';

    $total = $bebida + $adicional + $acompanhamento;
    $total = number_format($total, 2, ',', '.');


 
    echo "
    <div class='resultado'>
        <h3>Pedido realizado</h3>
        <p><b>Nome:</b> $nome</p>
        <p><b>Bebida:</b> $bebida</p>
        <p><b>Adicional:</b> $adicional</p>
        <p><b>Gelo:</b> $gelo</p>
        <p><b>Acompanhamento:</b> $acompanhamento</p>
        <p><b>Total:</b> $total </p>
    </div>
    ";
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Starbucks</title>
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/Starbucks_Corporation_Logo_2011.svg/1280px-Starbucks_Corporation_Logo_2011.svg.png">
 
<style>
body{
    margin:0;
    font-family: Arial, sans-serif;
    background-color:#00704A;
}
 
.topo{
    background:#ffffff;
    text-align:center;
    padding:20px;
}
 
.topo img{
    width:100%;
}
 
.container{
    width:40%;
    background:white;
    margin:30px auto;
    padding:25px;
    border-radius:10px;
}
 
h2{
    text-align:center;
    color:#00704A;
}
 
label{
    font-weight:bold;
}
 
input[type=text],
select{
    width:100%;
    padding:8px;
    margin-top:5px;
    border-radius:5px;
    border:1px solid #ccc;
}
 
.grupo{
    margin-top:15px;
}
 
.botao{
    width:100%;
    padding:10px;
    background:#00704A;
    color:white;
    border:none;
    border-radius:5px;
    font-size:16px;
    cursor:pointer;
}
 
.botao:hover{
    background:#005c3e;
}
 
.resultado{
    max-width:500px;
    margin:20px auto;
    background:white;
    padding:20px;
    border-radius:10px;
}
</style>
</head>
 
<body>
 
<!-- área da imagem -->
<div class="topo">
    <img src="Banner Starbucks Ursinho.png" alt="Starbucks">
</div>
 
<div class="container">
 
<h2>Monte seu pedido</h2>
 
<form method="POST">
 
    <div class="grupo">
        <label>Seu nome</label>
        <input type="text" name="nome" required>
    </div>
 
    <div class="grupo">
        <label>Escolha sua bebida</label>
        <select name="bebida" required>
            <option value="">Selecione</option>
            <option value="15.30">Matcha - 15,30$</option>
            <option value="16.50">Iced Pistache Latte - 16,50$</option>
            <option value="21.80">Frappuccino choco - 21,80$</option>
            <option value="17.50">Pink lemonade - 17,50$</option>
        </select>
    </div>
 
    <div class="grupo">
        <label>Adicional</label><br>
        <input type="radio" name="adicional" value="0" required> Não quero adicional<br>
        <input type="radio" name="adicional" value="3.50"> Chocolate 3,50$<br>
        <input type="radio" name="adicional" value="3.50"> Morango 3,50$
    </div>
 
    <div class="grupo">
        <label>Gelo</label><br>
        <input type="radio" name="gelo" value="Com gelo" required> Com gelo<br>
        <input type="radio" name="gelo" value="Sem gelo"> Sem gelo
    </div>
 
    <div class="grupo">
        <label>Acompanhamento</label><br>
        <input type="radio" name="acompanhamento" value= "16.65" required> Cookie chocolate 16,65$<br>
        <input type="radio" name="acompanhamento" value= "21.70"> Bolo morango 21,70$<br>
        <input type="radio" name="acompanhamento" value= "5.65"> Pão de queijo 5,65$<br>
        <input type="radio" name="acompanhamento" value="0"> Não quero acompanhamento
    </div>
 
    <div class="grupo">
        <input type="submit" class="botao" value="Salvar pedido">
    </div>
 
</form>
 
</div>
 
</body>
</html>


