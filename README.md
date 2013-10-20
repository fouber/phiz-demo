A Demo Of [Phiz](https://github.com/fouber/phiz) Framework
========

## Prepare

1. install [sdk](https://github.com/fouber/phiz-tool)

    ```bash
    npm install -g phiz
    ```

1. download this demo

    ```bash
    cd path/to/workspace
    git clone https://github.com/fouber/phiz-demo.git
    cd phiz-demo
    ```

1. webserver

    if you got [php-cgi] support in your system, you can launch a built-in webserver of [phiz-sdk](ttps://github.com/fouber/phiz-tool) by the command below:
    
    ```bash
    phiz server start --no-rewrite
    ```
    
    otherwise, you need a webserver which can run php.

1. phiz-lib

    if you have launched phiz-sdk built-in server, then use the command below to install [phiz-lib](https://github.com/fouber/phiz) to phiz server ``www`` directory:
    
    ```bash
    phiz server install phiz-lib
    ```
    
    otherwise, use git clone: 
    
    ```bash
    cd path/to/your/webserver/htdocs
    git clone https://github.com/fouber/phiz.git
    ```

## Run Demo

1. release project
    
    if you have launched phiz-sdk built-in server, then use the command below to compile and release the project to phiz server ``www`` directory:
    
    ```bash
    cd path/to/workspace/phiz-demo
    phiz release -r common
    phiz release -r foo
    phiz release -r foo-bar
    ```
    
    otherwise, use ``-d <path>`` option of phiz release command to specify release path: 
    
    ```bash
    cd path/to/workspace/phiz-demo
    phiz release -r common -d path/to/your/webserver/htdocs
    phiz release -r foo -d path/to/your/webserver/htdocs
    phiz release -r foo-bar -d path/to/your/webserver/htdocs
    ```

1. browser project

    view it at [http://127.0.0.1:8080/index.php]


## Learn More

* [phiz](https://github.com/fouber/phiz)
* [phiz-sdk](https://github.com/fouber/phiz-tool)