<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        /* Reset básico para remover margens e espaçamentos padrão */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilos do corpo para definir uma fonte padrão */
        body {
            font-family: Arial, sans-serif;
        }

        /* Estilos do header, que contém o logo e o menu */
        .header {
            /* Flexbox para alinhar logo e menu nas extremidades */
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #f8f8f8; /* Cor de fundo clara */
        }

        /* Estilo do logo */
        .logo {
            font-size: 24px; /* Tamanho do texto do logo */
            font-weight: bold; /* Deixa o logo em negrito */
        }

        /* Estilo do menu */
        .menu {
            /* Flexbox para espaçamento entre os itens do menu */
            display: flex;
            gap: 20px; /* Espaçamento entre cada item do menu */
        }

        /* Seção de promoções com as imagens circulares */
        .promo-section {
            /* Flexbox para centralizar os itens horizontalmente e espaçá-los */
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
            background-color: #eaeaea; /* Cor de fundo clara */
        }

        /* Estilo individual para cada item de promoção (círculos) */
        .promo-item {
            width: 150px; /* Largura dos círculos */
            height: 150px; /* Altura dos círculos */
            background-color: #ccc; /* Cor de fundo dos círculos */
            border-radius: 50%; /* Torna o elemento circular */
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px; /* Tamanho do texto dentro dos círculos */
            color: #555; /* Cor do texto dentro dos círculos */
        }

        /* Seção de promoções (abaixo dos círculos) */
        .promocoes {
            padding: 40px; /* Espaçamento interno da seção */
            background-color: #f2f2f2; /* Cor de fundo */
            text-align: center; /* Centraliza o texto */
            font-size: 24px; /* Tamanho do texto */
        }
    </style>
</head>
<body>
    <!-- Cabeçalho que contém o logo e o menu de navegação -->
    <div class="header">
        <div class="logo">LOGO</div> <!-- Área do logo -->
        <div class="menu">
            <div><a href="#">Início</a></div>
            <div><a href="#">Serviços</a></div>
            <div><a href="#">Sobre</a></div>
            <div><a href=
