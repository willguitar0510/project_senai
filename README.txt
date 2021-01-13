iniciar o projeto com docker-compose up
executar o comando .sql para atualizar a base e entrar em localhost no browser
comando para executar o sql:
dentro da pasta do projeto
	docker exec -i project_senai-main_mysql_1 mysql -uroot -p123.456 < db/ist.sql