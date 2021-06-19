##Heróis Marvel

- API - Desenvolvida com Framework Laravel 
   ```
    http://localhost:8000
  ```

# Instalação
- Para fazer a instalação basta seguir os paços abaixo:
```
    Após fazer o clone da aplicação editar o arquivo
     .env adicionando as keys que foram enviadas por e-mail
     
     PUBLIC_KEY=
     PRIVATE_KEY=
     
    Executar esse comando
    
    $ docker-compose up -d --build
    
    -  caso apresente erro ao executar a aplicação execute este comando
    
    $ docker exec -it marvel_app composer install
    
    *** Caso de algum erro de permissão execute o comando abaixo na raiz do projeto:
    chmod -R 775 storage
    chmod -R 775 bootstrap
    
    *** Se mesmo assim ainda está com erro de permissão. 
    Com certeza são vilões que não querem a exibição dos heróis :)
    
    chmod -R 777 storage
    chmod -R 777 bootstrap
    
    *** Com esses comandos eles serão eliminados :):


  
    
  ```

## Testes
- Para rodar os testes da api basta rodar o comando 

```
    $ docker exec -it marvel_app vendor/bin/phpunit tests
```

## Desafio

- [x] Buscar na API da Marvel (https://developer.marvel.com/docs) os seus 3 heróis favoritos
  ```
    - Endpoint: http://localhost:8000
        Method: GET
  ```
- [x] Listar 5 histórias nas quais eles apareçam.

  ```
    - Endpoint: http://localhost:8000/{id}/historias
        Method: GET
      Acionado a partir do botão histórias na tela home
   
  ```
  
  ![Alt text](files/tela_home.png?raw=true "Title")

## Observação

- Template utilizado Admin-Lte v3
- Optei por utiliza-lo pois eu desenvolvi um automatizador de códigos utilizando o template mensionado
 
```
    Url repositório: 
    https://packagist.org/packages/tfarias/instalador-tfarias-lte
 ```



