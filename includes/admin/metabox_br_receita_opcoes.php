<?php
function br_receita_opcoes(){
    $receita_data = get_post_meta($post->ID, 'reeita_data',true);
    ?>
    Ingredientes: <br/>
    <input type="text" name="br_ingredientes"/>
    <br/><br/>

    Tempo da receita: <br/>
    <input type="text" name="br_tempo" /> <br/><br/>

    Utensílios:<br/>
    <input type="text" name="br_utensilios" /> <br/><br/>

    Nivel de dificuldade: <br/>
    <select name="br_dificuldade">
        <option value="0">Iniciante </option>
        <option value="1">Intermediário </option>
        <option value="2">Avançado </option>
    </select><br/><br/> 

    Tipo da receita:<br/>
    <input type="text" name="br_tipo" />

    <?php
}