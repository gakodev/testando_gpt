<?php
include_once('config.php');
// print_r($_SESSION);

    if(isset($_POST['submit']))
    {

      include_once('config.php');

      $iddoutor = $_POST['iddoutor'];
      $email_paciente = $_POST['email_paciente'];
      $nome_paciente = $_POST['nome_paciente'];

      $pinecept = $_POST['q1'] + $_POST['q2'] + $_POST['q3'] + $_POST['q4'] + $_POST['q5'] + $_POST['q6'] + $_POST['q7'];

      $tirocept = $_POST['q8'] + $_POST['q9'] + $_POST['q10'] + $_POST['q11'] + $_POST['q12'] + $_POST['q13'] + $_POST['q14'] + $_POST['q15'] + $_POST['q16'] + $_POST['q17'];

      $glicocept =  $_POST['q18'] + $_POST['q19'] + $_POST['q20'] + $_POST['q21'] + $_POST['q22'] + $_POST['q23'] + $_POST['q24'] + $_POST['q25'] + $_POST['q26'] + $_POST['q27'];

      $energycept = $_POST['q28'] + $_POST['q29'] + $_POST['q30'] + $_POST['q31'] + $_POST['q32'] + $_POST['q33'] + $_POST['q34'] + $_POST['q35'] + $_POST['q36'] + $_POST['q37'] + $_POST['q38'] + $_POST['q39'] + $_POST['q40'] + $_POST['q41'] + $_POST['q42'] + $_POST['q43'];

      $procept =  $_POST['q44'] + $_POST['q45'] + $_POST['q46'] + $_POST['q47'] + $_POST['q48'];

      $femicept =  $_POST['q49'] + $_POST['q50'] + $_POST['q51'] + $_POST['q52'] + $_POST['q53'] + $_POST['q54'];

      $urocept = $_POST['q55'] + $_POST['q56'] + $_POST['q57'] + $_POST['q58'] + $_POST['q59'] + $_POST['q60'] + $_POST['q61'] + $_POST['q62'] + $_POST['q63'] + $_POST['q64'] + $_POST['q65'] + $_POST['q66'] + $_POST['q67'];

      $result = mysqli_query($conn, "INSERT INTO pacientes(iddoutor,email_paciente,nome_paciente,pinecept,tirocept,glicocept,energycept,procept,femicept,urocept) VALUES ('$iddoutor','$email_paciente','$nome_paciente','$pinecept','$tirocept','$glicocept','$energycept','$procept','$femicept','$urocept')");

      header('Location: questionariosIndex.html');
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<div class="box">
    <form action="formularioMasc.php" method="POST">
      
      <fieldset>
        <legend>Questionário Masculino</legend>
        <br><br>
        <div class="inputBox">
          <input type="text" name="iddoutor" id="iddoutor" class="inputUser" required>
          <label for="iddoutor" class="labelInput">ID Profissional de Saúde (número de identificação do profissional)</label>
        </div>

        <br><br>

        <div class="inputBox">
          <input type="text" name="email_paciente" id="email_paciente" class="inputUser" required>
          <label for="email_paciente" class="labelInput">E-mail do paciente sem espaços ou letra maiúscula</label>
        </div>

        <br><br>

        <div class="inputBox">
          <input type="text" name="nome_paciente" id="nome_paciente" class="inputUser" required>
          <label for="nome_paciente" class="labelInput">Nome completo respeitando as letras maiúsculas</label>
        </div>

        <br><br>

        <div style='display: flex; flex-wrap: wrap; gap: 10px;'>

        <div class="inputBox">
        <p class='areas'>Você dorme tarde e acorda tarde?</p>
        <input type="radio" id="sim1" name="q1" value=1 required>
        <label for="sim1">Sim</label>
        <br>
        <input type="radio" id="nao1" name="q1" value=0 required>
        <label for="nao1">Não</label>
        </div>
        
        <div class="inputBox">
        <p  class='areas'>Sua mente é agitada e isso dificulta para você dormir?</p>
        <input type="radio" id="sim2" name="q2" value=1 required>
        <label for="sim2">Sim</label>
        <br>
        <input type="radio" id="nao2" name="q2" value=0 required>
        <label for="nao2">Não</label>
        </div>

        <div class="inputBox">
        <p  class='areas'>Você tem dificuldade para adormecer?</p>
        <input type="radio" id="sim3" name="q3" value=1 required>
        <label for="sim3">Sim</label>
        <br>
        <input type="radio" id="nao3" name="q3" value=0 required>
        <label for="nao3">Não</label>
        </div>

        <div class="inputBox">
        <p  class='areas'>Seu sono costuma ser superficial/agitado?</p>
        <input type="radio" id="sim4" name="q4" value=1 required>
        <label for="sim4">Sim</label>
        <br>
        <input type="radio" id="nao4" name="q4" value=0 required>
        <label for="nao4">Não</label>
        </div>

        <div class="inputBox">
        <p  class='areas'>Você desperta facilmente ou para urinar diversas vezes a noite?</p>
        <input type="radio" id="sim5" name="q5" value=1 required>
        <label for="sim5">Sim</label>
        <br>
        <input type="radio" id="nao5" name="q5" value=0 required>
        <label for="nao5">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Se você desperta a noite tem dificuldade para voltar a dormir?</p>
        <input type="radio" id="sim6" name="q6" value=1 required>
        <label for="sim6">Sim</label>
        <br>
        <input type="radio" id="nao6" name="q6" value=0 required>
        <label for="nao6">Não</label>
        </div>
        
        <div class="inputBox">
        <p class='areas'>Seu sono não é reparador, ou você acorda cansado?</p>
        <input type="radio" id="sim7" name="q7" value=1 required>
        <label for="sim7">Sim</label>
        <br>
        <input type="radio" id="nao7" name="q7" value=0 required>
        <label for="nao7">Não</label>
        </div>


        <div class="inputBox">
        <p class='areas'>Você tem as mãos e pés frios?</p>
        <input type="radio" id="sim8" name="q8" value=1 required>
        <label for="sim8">Sim</label>
        <br>
        <input type="radio" id="nao8" name="q8" value=0 required>
        <label for="nao8">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Você engorda facilmente, principalmente na cintura?</p>
        <input type="radio" id="sim9" name="q9" value=1 required>
        <label for="sim9">Sim</label>
        <br>
        <input type="radio" id="nao9" name="q9" value=0 required>
        <label for="nao9">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Você tem perda de cabelo ou cabelos secos?</p>
        <input type="radio" id="sim10" name="q10" value=1 required>
        <label for="sim10">Sim</label>
        <br>
        <input type="radio" id="nao10" name="q10" value=0 required>
        <label for="nao10">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Pele seca?</p>
        <input type="radio" id="sim11" name="q11" value=1 required>
        <label for="sim11">Sim</label>
        <br>
        <input type="radio" id="nao11" name="q11" value=0 required>
        <label for="nao11">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Falta de ânimo / cansaço?</p>
        <input type="radio" id="sim12" name="q12" value=1 required>
        <label for="sim12">Sim</label>
        <br>
        <input type="radio" id="nao12" name="q12" value=0 required>
        <label for="nao12">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Memória e concentração falhando?</p>
        <input type="radio" id="sim13" name="q13" value=1 required>
        <label for="sim13">Sim</label>
        <br>
        <input type="radio" id="nao13" name="q13" value=0 required>
        <label for="nao13">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Você tem sonolência durante o dia?</p>
        <input type="radio" id="sim14" name="q14" value=1 required>
        <label for="sim14">Sim</label>
        <br>
        <input type="radio" id="nao14" name="q14" value=0 required>
        <label for="nao14">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Constipação (prisão de ventre)?</p>
        <input type="radio" id="sim15" name="q15" value=1 required>
        <label for="sim15">Sim</label>
        <br>
        <input type="radio" id="nao15" name="q15" value=0 required>
        <label for="nao15">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Você sofre de dores nas costas, principalmente na região lombar?</p>
        <input type="radio" id="sim16" name="q16" value=1 required>
        <label for="sim16">Sim</label>
        <br>
        <input type="radio" id="nao16" name="q16" value=0 required>
        <label for="nao16">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Você sofre de inchaço / retenção de líquido?</p>
        <input type="radio" id="sim17" name="q17" value=1 required>
        <label for="sim17">Sim</label>
        <br>
        <input type="radio" id="nao17" name="q17" value=0 required>
        <label for="nao17">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Sente-se mais cansado que o habitual?</p>
        <input type="radio" id="sim18" name="q18" value=1 required>
        <label for="sim18">Sim</label>
        <br>
        <input type="radio" id="nao18" name="q18" value=0 required>
        <label for="nao18">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Cansaço e Sonolência no final da tarde</p>
        <input type="radio" id="sim19" name="q19" value=1 required>
        <label for="sim19">Sim</label>
        <br>
        <input type="radio" id="nao19" name="q19" value=0 required>
        <label for="nao19">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Irritabilidade a tarde?</p>
        <input type="radio" id="sim20" name="q20" value=1 required>
        <label for="sim20">Sim</label>
        <br>
        <input type="radio" id="nao20" name="q20" value=0 required>
        <label for="nao20">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Desejo de doce a tarde?</p>
        <input type="radio" id="sim21" name="q21" value=1 required>
        <label for="sim21">Sim</label>
        <br>
        <input type="radio" id="nao21" name="q21" value=0 required>
        <label for="nao21">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Dificuldade de concentração no final da manha ou tarde?</p>
        <input type="radio" id="sim22" name="q22" value=1 required>
        <label for="sim22">Sim</label>
        <br>
        <input type="radio" id="nao22" name="q22" value=0 required>
        <label for="nao22">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Dificuldade para emagrecer?</p>
        <input type="radio" id="sim23" name="q23" value=1 required>
        <label for="sim23">Sim</label>
        <br>
        <input type="radio" id="nao23" name="q23" value=0 required>
        <label for="nao23">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Obesidade abdominal (barriga)?</p>
        <input type="radio" id="sim24" name="q24" value=1 required>
        <label for="sim24">Sim</label>
        <br>
        <input type="radio" id="nao24" name="q24" value=0 required>
        <label for="nao24">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Sentindo fome mesmo depois de uma refeição?</p>
        <input type="radio" id="sim25" name="q25" value=1 required>
        <label for="sim25">Sim</label>
        <br>
        <input type="radio" id="nao25" name="q25" value=0 required>
        <label for="nao25">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Micção (urina) frequente ou aumentada?</p>
        <input type="radio" id="sim26" name="q26" value=1 required>
        <label for="sim26">Sim</label>
        <br>
        <input type="radio" id="nao26" name="q26" value=0 required>
        <label for="nao26">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Sensações de formigamento nas mãos ou pés?</p>
        <input type="radio" id="sim27" name="q27" value=1 required>
        <label for="sim27">Sim</label>
        <br>
        <input type="radio" id="nao27" name="q27" value=0 required>
        <label for="nao27">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Desejo de alimentos salgados ou coloca mais sal?</p>
        <input type="radio" id="sim28" name="q28" value=1 required>
        <label for="sim28">Sim</label>
        <br>
        <input type="radio" id="nao28" name="q28" value=0 required>
        <label for="nao28">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Insônia?</p>
        <input type="radio" id="sim29" name="q29" value=1 required>
        <label for="sim29">Sim</label>
        <br>
        <input type="radio" id="nao29" name="q29" value=0 required>
        <label for="nao29">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Fadiga (cansaço) mental ou fisica?</p>
        <input type="radio" id="sim30" name="q30" value=1 required>
        <label for="sim30">Sim</label>
        <br>
        <input type="radio" id="nao30" name="q30" value=0 required>
        <label for="nao30">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Perde foco e a atenção facilmente?</p>
        <input type="radio" id="sim31" name="q31" value=1 required>
        <label for="sim31">Sim</label>
        <br>
        <input type="radio" id="nao31" name="q31" value=0 required>
        <label for="nao31">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Distúrbios de Memória ou Perda da memória recente?</p>
        <input type="radio" id="sim32" name="q32" value=1 required>
        <label for="sim32">Sim</label>
        <br>
        <input type="radio" id="nao32" name="q32" value=0 required>
        <label for="nao32">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Dificuldade de lidar com estresse (desanimo)?</p>
        <input type="radio" id="sim33" name="q33" value=1 required>
        <label for="sim33">Sim</label>
        <br>
        <input type="radio" id="nao33" name="q33" value=0 required>
        <label for="nao33">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Ansiedade ou negativismo?</p>
        <input type="radio" id="sim34" name="q34" value=1 required>
        <label for="sim34">Sim</label>
        <br>
        <input type="radio" id="nao34" name="q34" value=0 required>
        <label for="nao34">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Irritabilidade ou facil Alteração do Humor?</p>
        <input type="radio" id="sim35" name="q35" value=1 required>
        <label for="sim35">Sim</label>
        <br>
        <input type="radio" id="nao35" name="q35" value=0 required>
        <label for="nao35">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Resfriados frequentes?</p>
        <input type="radio" id="sim36" name="q36" value=1 required>
        <label for="sim36">Sim</label>
        <br>
        <input type="radio" id="nao36" name="q36" value=0 required>
        <label for="nao36">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Problemas de pele?</p>
        <input type="radio" id="sim37" name="q37" value=1 required>
        <label for="sim37">Sim</label>
        <br>
        <input type="radio" id="nao37" name="q37" value=0 required>
        <label for="nao37">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Aperto da mandíbula ou ranger dos dentes?</p>
        <input type="radio" id="sim38" name="q38" value=1 required>
        <label for="sim38">Sim</label>
        <br>
        <input type="radio" id="nao38" name="q38" value=0 required>
        <label for="nao38">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Inquietude nas pernas?</p>
        <input type="radio" id="sim39" name="q39" value=1 required>
        <label for="sim39">Sim</label>
        <br>
        <input type="radio" id="nao39" name="q39" value=0 required>
        <label for="nao39">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Dificuldade de ereção?</p>
        <input type="radio" id="sim40" name="q40" value=1 required>
        <label for="sim40">Sim</label>
        <br>
        <input type="radio" id="nao40" name="q40" value=0 required>
        <label for="nao40">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Mãos e pés frios?</p>
        <input type="radio" id="sim41" name="q41" value=1 required>
        <label for="sim41">Sim</label>
        <br>
        <input type="radio" id="nao41" name="q41" value=0 required>
        <label for="nao41">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Palpitações?</p>
        <input type="radio" id="sim42" name="q42" value=1 required>
        <label for="sim42">Sim</label>
        <br>
        <input type="radio" id="nao42" name="q42" value=0 required>
        <label for="nao42">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Tonturas?</p>
        <input type="radio" id="sim43" name="q43" value=1 required>
        <label for="sim43">Sim</label>
        <br>
        <input type="radio" id="nao43" name="q43" value=0 required>
        <label for="nao43">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Náuseas ou enjôos faceis?</p>
        <input type="radio" id="sim44" name="q44" value=1 required>
        <label for="sim44">Sim</label>
        <br>
        <input type="radio" id="nao44" name="q44" value=0 required>
        <label for="nao44">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Sono mais leve?</p>
        <input type="radio" id="sim45" name="q45" value=1 required>
        <label for="sim45">Sim</label>
        <br>
        <input type="radio" id="nao45" name="q45" value=0 required>
        <label for="nao45">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Dificuldade para urinar?</p>
        <input type="radio" id="sim46" name="q46" value=1 required>
        <label for="sim46">Sim</label>
        <br>
        <input type="radio" id="nao46" name="q46" value=0 required>
        <label for="nao46">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Dificuldade para evacuar (constipação)?</p>
        <input type="radio" id="sim47" name="q47" value=1 required>
        <label for="sim47">Sim</label>
        <br>
        <input type="radio" id="nao47" name="q47" value=0 required>
        <label for="nao47">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Inchaço nas pernas?</p>
        <input type="radio" id="sim48" name="q48" value=1 required>
        <label for="sim48">Sim</label>
        <br>
        <input type="radio" id="nao48" name="q48" value=0 required>
        <label for="nao48">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Irritação facilmente?</p>
        <input type="radio" id="sim49" name="q49" value=1 required>
        <label for="sim49">Sim</label>
        <br>
        <input type="radio" id="nao49" name="q49" value=0 required>
        <label for="nao49">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Aumento volume (gordura) nas mamas?</p>
        <input type="radio" id="sim50" name="q50" value=1 required>
        <label for="sim50">Sim</label>
        <br>
        <input type="radio" id="nao50" name="q50" value=0 required>
        <label for="nao50">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Obesidade abdominal?</p>
        <input type="radio" id="sim51" name="q51" value=1 required>
        <label for="sim51">Sim</label>
        <br>
        <input type="radio" id="nao51" name="q51" value=0 required>
        <label for="nao51">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Diminuiu volume de urina ou aumento da prostata?</p>
        <input type="radio" id="sim52" name="q52" value=1 required>
        <label for="sim52">Sim</label>
        <br>
        <input type="radio" id="nao52" name="q52" value=0 required>
        <label for="nao52">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Ereção mais dificil?</p>
        <input type="radio" id="sim53" name="q53" value=1 required>
        <label for="sim53">Sim</label>
        <br>
        <input type="radio" id="nao53" name="q53" value=0 required>
        <label for="nao53">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Dificuldade para urinar?</p>
        <input type="radio" id="sim54" name="q54" value=1 required>
        <label for="sim54">Sim</label>
        <br>
        <input type="radio" id="nao54" name="q54" value=0 required>
        <label for="nao54">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Má qualidade do sono / Insonia?</p>
        <input type="radio" id="sim55" name="q55" value=1 required>
        <label for="sim55">Sim</label>
        <br>
        <input type="radio" id="nao55" name="q55" value=0 required>
        <label for="nao55">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Mais Irritabilidade, Nervosismo, Tensão?</p>
        <input type="radio" id="sim56" name="q56" value=1 required>
        <label for="sim56">Sim</label>
        <br>
        <input type="radio" id="nao56" name="q56" value=0 required>
        <label for="nao56">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Menos autoconfiante e mais hesitante?</p>
        <input type="radio" id="sim57" name="q57" value=1 required>
        <label for="sim57">Sim</label>
        <br>
        <input type="radio" id="nao57" name="q57" value=0 required>
        <label for="nao57">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Cansa mais facilmente com qualquer atividade física?</p>
        <input type="radio" id="sim58" name="q58" value=1 required>
        <label for="sim58">Sim</label>
        <br>
        <input type="radio" id="nao58" name="q58" value=0 required>
        <label for="nao58">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Queda de cabelo?</p>
        <input type="radio" id="sim59" name="q59" value=1 required>
        <label for="sim59">Sim</label>
        <br>
        <input type="radio" id="nao59" name="q59" value=0 required>
        <label for="nao59">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Flacidez ou diminuição da massa muscular?</p>
        <input type="radio" id="sim60" name="q60" value=1 required>
        <label for="sim60">Sim</label>
        <br>
        <input type="radio" id="nao60" name="q60" value=0 required>
        <label for="nao60">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Desempenho sexual é pior do que costumava ser?</p>
        <input type="radio" id="sim61" name="q61" value=1 required>
        <label for="sim61">Sim</label>
        <br>
        <input type="radio" id="nao61" name="q61" value=0 required>
        <label for="nao61">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Diminuição ou Perda da Libido (desejo)?</p>
        <input type="radio" id="sim62" name="q62" value=1 required>
        <label for="sim62">Sim</label>
        <br>
        <input type="radio" id="nao62" name="q62" value=0 required>
        <label for="nao62">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Dores Musculares e Articulações (juntas)?</p>
        <input type="radio" id="sim63" name="q63" value=1 required>
        <label for="sim63">Sim</label>
        <br>
        <input type="radio" id="nao63" name="q63" value=0 required>
        <label for="nao63">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Problemas de Próstata ou dificuldades para urinar?</p>
        <input type="radio" id="sim64" name="q64" value=1 required>
        <label for="sim64">Sim</label>
        <br>
        <input type="radio" id="nao64" name="q64" value=0 required>
        <label for="nao64">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Zumbido ou som de estática nos ouvidos?</p>
        <input type="radio" id="sim65" name="q65" value=1 required>
        <label for="sim65">Sim</label>
        <br>
        <input type="radio" id="nao65" name="q65" value=0 required>
        <label for="nao65">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Taquicardia ou palpitações?</p>
        <input type="radio" id="sim66" name="q66" value=1 required>
        <label for="sim66">Sim</label>
        <br>
        <input type="radio" id="nao66" name="q66" value=0 required>
        <label for="nao66">Não</label>
        </div>

        <div class="inputBox">
        <p class='areas'>Intestino mais lento?</p>
        <input type="radio" id="sim67" name="q67" value=1 required>
        <label for="sim67">Sim</label>
        <br>
        <input type="radio" id="nao67" name="q67" value=0 required>
        <label for="nao67">Não</label>
        </div>

        </div>
        <br><br>
    <input type="submit" name="submit" id="submit">
  <div style='height: 40px; width: 100%; backgroundcolor: transparent;'>
  </div>
      </fieldset>
    </form>  

  </div>
</body>
</html>
