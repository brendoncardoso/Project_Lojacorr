Fala, Galerinha da Lojacorr! rs <br>
Obrigado por acreditarem em mim e por me selecionarem para última etapa do Processo Seletivo. 

Bom, aqui vai algumas intruções da Prova Técnica que fiz com <strong>Laravel 6</strong> junto com AdminLTE 3. <br>
Então, é MUITO IMPORTANTE que leiam o arquivo <strong>README.md</strong> até o final. :smile: 

Vamos lá! Antes de executar, é necessário fazer as configurações para o projeto funcionar. <br>
Mas "<strong>Calma, Eu estou aqui</strong>" e vou explicar passo a passo do que precisa ser feito. :wink: <br>

<p align="center">
  <img src="https://66.media.tumblr.com/48ac9f289e8f85a79fc70f0a0069eec0/tumblr_mwkeviSOlD1sdfgzpo1_400.gif" />
</p>

<strong>1° Passo:</strong> Abrir o Gitbash. <br>

<strong>2° Passo:</strong> Vamos clonar o nosso repositório. <br>
Cole o código: <strong> git clone https://github.com/brendoncardoso/Project_Lojacorr.git </strong> e pressione a tecla <strong>Enter</strong>. 

<strong>3° Passo:</strong> Instalar o composer no Projeto. <br>
Cole o código: <strong>composer install</strong> e pressione a tecla <strong>Enter</strong>. 

<strong>4° Passo:</strong> Copiar o arquivo "env-example.php" para "env.php" <br>
Cole o código: <strong>php -r "copy('.env.example', '.env');</strong> e pressione a tecla <strong>Enter</strong>.

<strong>5 Passo:</strong> Gerar Key para o arquivo env.php <br>
Cole o código: <strong>php artisan key:generate</strong> e pressione a tecla <strong>Enter</strong>.

<strong>6° Passo:</strong> Configurar o Banco de Dados <br>
Dentro do arquivo 'env.php' na <strong>Linha 12</strong>, colar o código: <strong>DB_DATABASE=project_lojacorr</strong>.

<strong>Obs:</strong> Podem ficar tranquilos que o Banco de Dados já está dentro desse repositório.

<p align="center">
  <img src="https://i.pinimg.com/originals/b4/d0/bc/b4d0bc7a0a9a9d6f34274e7be5eabfe1.gif" />
</p>

Pronto! o projeto já está configurado. :smile:

Agora falta abrirmos, né?

<p align="center">
  <img src="https://pa1.narvii.com/6680/822a7ac31feb355f53fef434ef90f9fb0bb19a08_hq.gif" />
</p>

<strong>Último Passo:</strong> Abrir o projeto. <br>
Cole o código: <strong>php artisan serve</strong> e pressione a tecla <strong>Enter</strong>. <br>

Vamos <strong>copiar</strong> o link do server (http://127.0.0.1:8000) e <strong>colar</strong> na barra do seu navagador. <br>
Aperte <strong>Enter</strong> para pesquisar. <br>

E então...

<p align="center">
  <img src="https://media.giphy.com/media/JqDeI2yjpSRgdh35oe/giphy.gif" />
</p>

O projeto está aberto! :smile: 

