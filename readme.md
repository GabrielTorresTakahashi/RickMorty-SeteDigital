
# Rick Morty - Sete Digital

Esse projeto tem em vista apresentar meus conhecimentos em programação.
A API consultada neste projeto pode ser encontrada [aqui](https://rickandmortyapi.com/documentation/#rest) enquanto o design do projeto seguiu este [wireframe](https://www.figma.com/proto/Njvv1yhQxbC4Qksh6Es1Vz/Sete-Rick-Morty?node-id=14%3A259&scaling=scale-down&page-id=0%3A1)

## Padrão de projeto
 O padrão de projeto utilizado foi MVC (Model-view-controller).
O banco de dados utilizado para a construção do sistema foi o [MongoDb](https://www.mongodb.com/).

## Dependências
 O projeto utiliza do framework PHP [CodeIgniter 3.](https://codeigniter.com/userguide3/installation/downloads.html)
Foi utilizado o driver [php_mongodb.dll](https://github.com/mongodb/mongo-php-driver/releases/) e feita a instalação pelo composer com o seguinte comando:

> composer require mongodb/mongodb

## Arquivos criados
Todas as telas criadas estão dentro de application/views.

 - Os controladores ficam localizados em application/controllers.
 - Os modelos criados residem em application/models.
 - O banco de dados MongoDb não é suportado nativamente pelo framework, então foi criada uma biblioteca para realizar a adaptação, localizada em application/libraries

## Descrição atual do projeto
No momento, o sistema efetua cadastro e leitura de usuário por nome e idade.
Ao acessar o sistema, é possível visualizar as informações de alguns dos personagens obtidos na [API](https://rickandmortyapi.com/documentation/#rest).

