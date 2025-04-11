<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cadastro</title>
</head>
<body>
    <h1>Resultado do Cadastro</h1>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Receber os dados do formulário
        $nome = htmlspecialchars($_POST['nome']);
        $consumo_maximo = floatval($_POST['consumo_maximo']);
        $horas_dia = floatval($_POST['horas_dia']);
        $dias_mes = intval($_POST['dias_mes']);
        $valor_kwh = floatval($_POST['valor_kwh']);
        
        // Cálculos
        $x = $consumo_maximo / 1000;
        $consumo_diario_watts = $x * $horas_dia;
        $consumo_mensal_watts = $consumo_diario_watts * $dias_mes;
        $consumo_reais = $consumo_mensal_watts * $valor_kwh;
        
        // Determinar categoria
        if ($consumo_reais <= 5) {
            $categoria = 'Baixa';
        } elseif ($consumo_reais <= 10) {
            $categoria = 'Moderada';
        } else {
            $categoria = 'Elevada';
        }
        ?>
        
        <h2>Dados do Aparelho</h2>
        <p><strong>Nome:</strong> <?php echo $nome; ?></p>
        <p><strong>Consumo máximo:</strong> <?php echo $consumo_maximo; ?> watts</p>
        <p><strong>Horas ligado por dia:</strong> <?php echo $horas_dia; ?> horas</p>
        <p><strong>Dias ligado no mês:</strong> <?php echo $dias_mes; ?> dias</p>
        <p><strong>Valor do kWh:</strong> R$ <?php echo number_format($valor_kwh, 2, ',', '.'); ?></p>
        
        <h2>Cálculos</h2>
        <p><strong>Consumo diário:</strong> <?php echo number_format($consumo_diario_watts, 2, ',', '.'); ?> kWh</p>
        <p><strong>Consumo mensal:</strong> <?php echo number_format($consumo_mensal_watts, 2, ',', '.'); ?> kWh</p>
        <p><strong>Consumo em reais:</strong> R$ <?php echo number_format($consumo_reais, 2, ',', '.'); ?></p>
        
        <p><strong>Categoria de consumo:</strong> <?php echo $categoria; ?></p>
        
        <a href="index.php">Voltar para a página inicial</a>
        
        <?php
    } else {
        echo '<p>O formulário não foi enviado corretamente.</p>';
        echo '<a href="index.php">Voltar para a página inicial</a>';
    }
    ?>
</body>
</html>