# 📦 phpUnit - Projeto de Testes em PHP

Este projeto contém exemplos de testes automatizados utilizando o framework [PHPUnit](https://phpunit.de/).

## ✅ Pré-requisitos

- **PHP 5.6** 
- [Composer](https://getcomposer.org/)
- PHPUnit instalado globalmente ou via Composer

## ✅ Instalando o PHPUnit

### 1. Baixar o PHPUnit

Para instalar o PHPUnit, siga as instruções abaixo:

- No terminal, dentro da pasta do seu projeto, execute o seguinte comando para baixar o PHPUnit:

```bash
wget https://phar.phpunit.de/phpunit-5.7.phar

- Em seguida, torne o arquivo executável:
chmod +x phpunit-5.7.phar

- Mova o arquivo para um diretório global, para que o PHPUnit possa ser executado de qualquer lugar:
sudo mv phpunit-5.7.phar /usr/local/bin/phpunit

- Agora, verifique se o PHPUnit foi instalado corretamente, rodando:
phpunit --version
```

## ✅ Instalando o Composer

### 1. Baixar o Composer para o PHP 5.6

Para instalar o Composer, siga as instruções abaixo:

```bash

php -r "copy('https://getcomposer.org/download/2.2.21/composer.phar', 'composer.phar');"

- Para iniciar o Composer e configurar seu projeto, execute:
php composer.phar init
```

## ✅ Como rodar o PHPUnit
```bash
- Após a instalação, você pode rodar os testes com o PHPUnit, execute o seguinte comando no terminal:
phpunit tests/NOME_DO_TESTE.php
```




