# Banco de Questões

O Banco de Questões é uma aplicação web desenvolvida em Laravel 5.3 para gerenciar questões de prova.

Com ele é possivel inserir questões de multipla-escolha, categorizá-las e gerar provas.

O projeto é Open-Source de iniciativa dos alunos de Sistemas de Informação em Santarém, Pará.

## Como usar

1. Clone este repositório:

        $ git clone https://github.com/rurikhero/bancodequestoes.git

2. Acesse o diretório `cd bancodequestoes/` e execute o comando:

        $ composer install
        $ gulp --production

3. Configure seu arquivo de ambiente `.env` e inicialize o banco de dados:

        $ php artisan migrate --seed

4. Inicialize o servidor

		$ php artisan server

5. Use o navegador, vá para `http://localhost:8000` e have fun:

Sinta-se a vontade para forkar e contrubuir para este projeto.