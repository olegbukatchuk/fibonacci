# Генератор значений ряда Фибоначчи

Сервис принимает целое число, которое является порядковым номером в ряде Фибоначчи и возвращает значение этого элемента.

## Инструкция по установке

#### Установить менеджер пакетов Homebrew (если не установлен)
```markdown
$ /usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
```
#### Установить Git (если не установлен)
```markdown
$ brew install git
```
#### Установить Docker и Docker Compose (если не установлен)
```markdown
$ https://docs.docker.com/engine/installation/
```
#### Перейти в домашнюю директорию
```markdown
$ cd ${HOME}
```
#### Клонировать репозиторий
```markdown
$ git clone https://github.com/olegbukatchuk/fibonacci.git
```
#### Перейти в директорию с склонированным репозиторием
```markdown
$ cd fibonacci/
```
#### Запустить сборку
```markdown
$ docker-compose up -d
```
#### После завершения сборки контейнеров вы должны увидеть сдедующее:
```markdown
Creating php-fibonacci ...
Creating php-fibonacci ... done
Creating www-fibonacci ... 
Creating www-fibonacci ... done
Creating www-balancer ... 
Creating www-balancer ... done
```
#### Проверить статус запущенных контейнеров можно командой
```markdown
$ docker ps
```
#### Вывод должен быть примерно таким 
Отличатся будут только столбцы (CONTAINER ID, CREATED и STATUS)
```markdown
CONTAINER ID        IMAGE                     COMMAND                  CREATED             STATUS              PORTS                NAMES
8e6ecb1ccaf9        fibonacci_www_balancer    "nginx -g 'daemon ..."   About an hour ago   Up About an hour    0.0.0.0:80->80/tcp   www-balancer
8b21eb015e94        fibonacci_www_fibonacci   "nginx -g 'daemon ..."   About an hour ago   Up About an hour    80/tcp               www-fibonacci
33ba2f2a2910        fibonacci_php_fibonacci   "docker-php-entryp..."   About an hour ago   Up About an hour    9000/tcp             php-fibonacci
```
#### Открываем браузер и вводим адрес
```markdown
http://localhost
```
### P.S. Дополнительно, есть консольный скрипт на Python3
```markdown
$ cd ${HOME}/fibonacci/console
```
### Запуск скрипта на Python3
```markdown
$ python3 fibonacci.py
```
Profit!