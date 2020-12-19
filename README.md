Fala, Galera da Lojacorr! <br>
Obrigado por acreditarem em mim e por me selecionarem para última etapa do Processo Seletivo. 

Bom, aqui vão algumas instruções do Teste Técnico que fiz com <strong>Laravel 6</strong> junto com AdminLTE 3. <br>
Então, é MUITO IMPORTANTE que leiam o arquivo <strong>README.md</strong> até o final. :smile: 

<hr>

Vamos lá! Antes de executar, é necessário fazer as configurações para o projeto funcionar. <br>
Vou explicar passo a passo do que precisa ser feito. :wink: <br>

<strong>1° Passo:</strong> Abrir o Gitbash. <br>

<strong>2° Passo:</strong> Entrar na Pasta <strong>htdocs</strong>. <br>
Cole o código: <strong>cd c:/xampp/htdocs </strong> e pressione a tecla <strong>Enter</strong>. 

<strong>3° Passo:</strong> Vamos clonar o nosso repositório. <br>
Cole o código: <strong> git clone https://github.com/brendoncardoso/Project_Lojacorr.git </strong>, pressione a tecla <strong>Enter</strong> e espere a cópia dos arquivos. 

<strong>4° Passo:</strong> Instalar o composer no Projeto. <br>
Cole o código: <strong>composer install</strong>, pressione a tecla <strong>Enter</strong> e espere a instalação até que seja concluída. 

<strong>5° Passo:</strong> Copiar o arquivo "env-example.php" para "env.php" <br>
Cole o código: <strong>php -r "copy('.env.example', '.env');</strong> e pressione a tecla <strong>Enter</strong>.

<strong>6 Passo:</strong> Gerar Key para o arquivo env.php <br>
Cole o código: <strong>php artisan key:generate</strong> e pressione a tecla <strong>Enter</strong>.

<strong>7° Passo:</strong> Configurar o Banco de Dados. <br>
Dentro do arquivo 'env.php' na <strong>Linha 12</strong>, colar o código: <strong>DB_DATABASE=project_lojacorr</strong>.

<strong>Obs:</strong> Podem ficar tranquilos que o Banco de Dados já está dentro desse repositório.

<p align="center">
  <img src="https://i.pinimg.com/originals/b4/d0/bc/b4d0bc7a0a9a9d6f34274e7be5eabfe1.gif" style='width: 40%!important'/>
</p>

Pronto! o projeto já está configurado. :smile:

Agora falta abrirmos, né?

<p align="center">
  <img src="https://pa1.narvii.com/6680/822a7ac31feb355f53fef434ef90f9fb0bb19a08_hq.gif" style='width: 40%!important'/>
</p>

<strong>Último Passo:</strong> Abrir o projeto. <br>
Cole o código: <strong>php artisan serve</strong> e pressione a tecla <strong>Enter</strong>. <br>

Vamos <strong>copiar</strong> o link do server que foi gerado (http://127.0.0.1:8000) e <strong>colar</strong> na barra do nosso navagador. <br>
Aperte <strong>Enter</strong> para pesquisar. <br>

E então...

<p align="center">
  <img src="https://media.giphy.com/media/JqDeI2yjpSRgdh35oe/giphy.gif" style='width: 40%!important'/>
</p>

O projeto está aberto! :smile: 

<hr>

Agora irei contar alguns detalhes que fiz no Teste: 

<ul>
  <li><strong>Procurando CEP</strong></li>
  <p>- Quando o campo <strong>CEP</strong> for totalmente preenchido, será feita uma requisição com a API via getJson. <br>
    Se o CEP for válido, os outros campos serão preenchidos automaticamente. Caso contrário, não será preenchido.
  </p>
</ul>

<ul>
  <li><strong>Regra de Negócio</strong></li>
  <p>- Na parte de <strong>Editar</strong>, o usuário que estiver logado no sistema <strong>NÃO</strong> poderá alterar o email e senha de outros usuários. Caso seja o mesmo, poderá alterar o email e senha.<br>
  </p>
</ul>

<hr>

Se tiverem dúvida, podem entrar em contato comigo que explicarei melhor. <br>

Bom, é isso e vou ficando por aqui. :smile:
<p align="center">
  <img src="https://media.giphy.com/media/20MnK9KSyq5nMTF7AG/giphy.gif" style='width: 50%!important'/>
</p>