<?php

include_once 'listar_Dados.php';

while ($row = $result->fetch_assoc()) {
    echo "
    <div class = '6u 12u$(medium) row showvinho'>
        <a href = 'showwine.php?id=" . $row['id'] . "'>
            <div class = 'showvinhoimg' style = 'background-image: URL(images/rotulos/" . $row['rotulo'] . ")'>
            </div>
        </a>
        <div class = 'divcontent'>
            <a href = 'showwine.php?id=" . $row['id'] . "'>
                <ul class = 'ultitulo'>
                    <li>" . $row['produtor'] . "</li>
                    <li><span>" . $row['nome'] . "</span></a></li>
                </ul>                         
            </a>
            <ul class='reg' style='margin-left: 8px;'>
                <li>" . $row['regiao'] . "</li>
                <li><span><br></span>  </li>
                <li>" . $row['paisorigem'] . "</li>
            </ul>

            <div class='average'>
                <div class='ratingbottom'>
                    <p>Avaliação Média</p>
                    <ul class='reg2 '>
                        <li><span>" . number_format($row['avaliacao'], 2, '.', '') . " </span></li>
                        <li>( " . $row['numavaliacoes'] . " avaliações )</li>
                    </ul>
                </div>
                <div class='ratingbottom'>
                    <p>Preço Medio</p>
                    <span>R$ " . number_format($row['preco'], 2, '.', '') . "
                    </span>
            </div>
        </div>
    </div>
</div>";
}