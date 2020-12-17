Fala, Galerinha da Lojacorr! rs <br>
Obrigado por acreditarem em mim e por me selecionarem para ultima etapa do Processo Seletivo. 

Bom, aqui vai algumas intruções da Prova Técnica que fiz com <strong>Laravel 6</strong> junto com Template LTE. Então, é MUITO IMPORTANTE que leiam o arquivo <strong>README.md</strong> até o final. :) 

Vamos lá! Antes de executar, é necessário fazer as configurações para o projeto funcionar. <br>

<p align="center">
  <img src="https://i.pinimg.com/originals/b0/37/df/b037df079ca328b196300f3a24816e9c.gif" /><br>
   Mas "<strong>Calma, Eu tô aqui</strong>" e vou explicar passo a passo do que precisa ser feito. :rofl:
</p>


<strong>1° Passo:</strong> Vamos clonar o repositório. <br>
Abra o GitBash e cole: <strong> git clone https://github.com/brendoncardoso/Project_Lojacorr.git </strong> 

<strong>2° Passo:</strong> Instalar o composer no Projeto. <br>
Cole o código: <strong>composer install</strong>

<strong>3° Passo:</strong> Copiar o arquivo "env-example" para "env" <br>
Cole o código: <strong>php -r "copy('.env.example', '.env');"</strong>

<strong>4° Passo:</strong> Gerar Key do arquivo env. <br>
Cole o código: <strong>php artisan key:generate</strong>

<strong>5° Passo:</strong> Configurar o Banco de Dados <br>
Dentro do arquivo 'env.php' na <strong>Linha 12</strong>, colar o código: <strong>DB_DATABASE=project_lojacorr</strong>

Obs: Podem ficar tranquilos que o Banco de Dados já está dentro do repositório.

<p align="center">
  <img src="https://i.pinimg.com/originals/b4/d0/bc/b4d0bc7a0a9a9d6f34274e7be5eabfe1.gif" />
</p>

Pronto! Agora o projeto já está configurado. :)
