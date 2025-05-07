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
chmod +x phpunit-5.7.phar
sudo mv phpunit-5.7.phar /usr/local/bin/phpunit
phpunit --version
```

## ✅ Instalando o Composer

### 1. Baixar o Composer para o PHP 5.6

Para instalar o Composer, siga as instruções abaixo:

```bash

php -r "copy('https://getcomposer.org/download/2.2.21/composer.phar', 'composer.phar');"
php composer.phar init
```

## ✅ Como rodar o PHPUnit
```bash
phpunit tests/NOME_DO_TESTE.php
```




