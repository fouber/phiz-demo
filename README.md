A Demo Of [Phiz](https://github.com/fouber/phiz) Framework
========

## prepare

1. install [sdk](https://github.com/fouber/phiz-tool)

    ```bash
    npm install -g phiz
    ```

1. download this demo

    ```bash
    cd path/to/workspace
    git clone https://github.com/fouber/phiz-demo.git
    ```

1. webserver

    if you got [php-cgi] support in your system, you can launch a built-in webserver of [phiz-sdk](ttps://github.com/fouber/phiz-tool) by the command below:
    
    ```bash
    phiz server star --no-rewrite
    ```
    
    otherwise, you need a webserver which can run php.

## run demo

1. release project

    ```bash
    cd phiz-demo
    ```
    
    if you have launched phiz-sdk built-in server, then use the command below to compile and release the project to phiz server ``www`` directory:
    
    ```bash
    phiz release -r common/
    phiz release -r foo/
    phiz release -r foo-bar/
    ```
    
    otherwise, use ``-d &lt;path&gt;`` option of phiz release command to specify release path: 
    
    ```bash
    phiz release -r common -d path/to/your/webserver/htdocs
    phiz release -r foo -d path/to/your/webserver/htdocs
    phiz release -r foo-bar -d path/to/your/webserver/htdocs
    ```

1. browser project

    view it at [http://127.0.0.1:8080/index.php]


## learn more

* [phiz](https://github.com/fouber/phiz)
* [phiz-sdk](https://github.com/fouber/phiz-tool)