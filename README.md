Fala, Galerinha da Lojacorr! rs 
Obrigado por acreditarem em mim e por me selecionarem para ultima etapa do Processo Seletivo. 

Bom, aqui vai algumas intruções da Prova Técnica que fiz com Laravel 6 junto com Template LTE. Então, é MUITO IMPORTANTE que leiam o arquivo "README.md" até o final. :) 

Vamos lá! Antes de executar, é necessário fazer as configurações para o projeto funcionar. 

1° Passo: Vamos clonar o repositório. 
Abra o GitBash e cole: git clone https://github.com/brendoncardoso/Project_Lojacorr.git 

2° Passo: Instalar o composer no Projeto.
Cole o código: composer install

3° Passo: Copiar o arquivo "env-example" para "env"
Cole o código: php -r "copy('.env.example', '.env');"

4° Passo: Gerar Key do arquivo env.
Cole o código: php artisan key:generate

5° Passo: Configurar o Banco de Dados
Dentro do arquivo 'env.php' na Linha 12, colar o código: DB_DATABASE=project_lojacorr

<img src="https://i.pinimg.com/originals/b4/d0/bc/b4d0bc7a0a9a9d6f34274e7be5eabfe1.gif" />

Obs: Podem ficar tranquilos que o Banco de Dados já está dentro do repositório. rs

Pronto! Agora o projeto já está configurado. :)
