<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Aparelhos Eletrônicos</title>
</head>
<body>
    <h1>Cadastro de Aparelhos Eletrônicos</h1>
    <form action="cadastro.php" method="post">
        <div>
            <label for="nome">Nome do aparelho:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        
        <div>
            <label for="consumo_maximo">Consumo máximo (watts):</label>
            <input type="number" id="consumo_maximo" name="consumo_maximo" min="1" required>
        </div>
        
        <div>
            <label for="horas_dia">Horas ligado por dia:</label>
            <input type="number" id="horas_dia" name="horas_dia" min="0" max="24" step="0.1" required>
        </div>
        
        <div>
            <label for="dias_mes">Dias ligado no mês:</label>
            <input type="number" id="dias_mes" name="dias_mes" min="1" max="31" required>
        </div>
        
        <div>
            <label for="valor_kwh">Valor do kWh (R$):</label>
            <input type="number" id="valor_kwh" name="valor_kwh" min="0.01" step="0.01" required>
        </div>
        
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>