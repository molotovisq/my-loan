# Rascunho de Apresentação - Gurupi Nov/2024

Do relacional ao elasticsearch

## Introdução


Olá, boa tarde! Meu nome é José Marcolino, e hoje convido vocês a explorar como uma aplicação pode combinar a solidez de um banco de dados relacional tradicional com o poder do Elasticsearch no tratamento de dados.
<br>

>Perguntar o nome de um ouvinte
>Ex: Malheiros

Digamos que o Malheiros é um agiota bonzinho (digo, um provedor de crédito alternativo), que não comete crimes, mas gosta de manter um contato bem próximo com seus clientes.

Malheiros, em sua jornada por lucros sente a necessidade de uma aplicação, onde possa concentrar as informações sobre seus empréstimos, e futuramente sobre a relação com seus clientes.

[Picture][Caderno] -> [Picture][PC/Digital] 

Malheiros entrou em contato com um desenvolvedor e indagou:

- Você consegue fazer uma aplicação simples pra mim, onde eu possa armazenar meus empréstimos e junto deles, alguns dados sobre meus clientes?

- Consigo!

- E eu consigo compartilhar esse sistema com mais "empresários" do meu ramo ?

- Consegue! Pagando bem, se consegue tudo.

## O primeiro sistema

Levantando os requisitos desse primeiro sistema, teríamos no diagrama ER (Entidade-Relacional) as seguintes tabelas:

[Screenshot][Diagram ER sem messages]

Nessa primeira abordagem, teríamos 4 tabelas:

- Empréstimos
- Provedores
- Clientes
- Endereços

Com essa primeira aplicação, Malheiros sai feliz. Consegue controlar seus empréstimos, seus clientes e manejar o seu limite de crédito.

## O crescimento

[Picture][Gráfico de linha crescendo/stonks]

Como agora nosso ~~agiota~~ **Provedor de Crédito Alternativo** tem um sistema para manejar seu negócio, a quantidade de clientes cresceu, a quantidade de "sócios" também cresceu, e ele agora quer expandir o sistema, introduzindo uma comunicação direta entre sócios e clientes.

Malheiros entra em contato novamente com seu desenvolvedor e fala:

- Cara, preciso de comunicação com meus clientes, consegue implementar um sistema de mensagens na nossa aplicação ?

- Consigo! E melhor, sem armazenar telefones, para manter a segurança das partes envolvidas.

Com a funcionalidade de mensagens implementadas, o sistema continua a crescer, a empresa de Malheiros agora sente a necessidade por Business Inteligence, para entender o perfil de seu usuário.

Pouco tempo depois, já traz novas idéias, para seu desenvolvedor, que a esta altura do campeonato, virou seu sócio:

- Preciso gerar indicadores sobre meus clientes, de forma rápida e em tempo real, para que possamos acompanhar o mercado.

- Cara, conheço um conjunto de ferramentas que traz exatamente o que você procura.

Depois dessa nova solicitação, o sistema de malheiros passa a contar com a elastic stack

## Dados, BI e Elastic stack

Pra falar de elastic search, temos que falar das ferramentas preferidas para extração e exibição de dados:

- Logstash --> Extração
- Elasticsearch --> Armazenamento
- Kibana --> Exibição

Aqui está uma explicação sucinta para cada ferramenta no contexto do Elastic Stack:

## Logstash  

[Picture][Algo que remeta a extração de dados]

O **Logstash** é uma ferramenta de coleta e processamento de dados. Ele extrai informações de diversas fontes, transforma os dados conforme necessário e os envia para armazenamento no Elasticsearch. É altamente configurável e suporta filtros e formatos variados.

### Extração: Pipelines

Na etapa de extração de dados, usamos uma pipeline, que é basicamente uma sequência de etapas para extrair e processar os dados. Nesse caso, a pipeline pode rodar uma query periodicamente no banco de dados da aplicação para buscar as informações necessárias. 

Depois de coletar os dados, a pipeline pode fazer algumas alterações ou filtros antes de enviar os dados para o Elasticsearch.

## Elasticsearch  

[Picture][Document Elasticsearch]

O **Elasticsearch** é o coração do Elastic Stack, um mecanismo de busca e análise distribuído e escalável. Ele armazena os dados de forma otimizada, permitindo buscas rápidas e análises avançadas, mesmo em grandes volumes de informações.

### Funcionamento

O Elasticsearch utiliza a estrutura de índice invertido, que organiza os dados como um mapeamento de termos para documentos, facilitando buscas extremamente rápidas. 

>Analogia: É como se, na abordagem relacional, você busca um registro que contém o dado, com clausulas WHERE, enquanto no Elasticsearch, o dado aponta para os registros que o contém.

### Índices e documentos

No Elasticsearch, o termo índice é usado para se referir a um conjunto de documentos de um mesmo tipo, o que pode ser comparado a uma tabela em bancos de dados relacionais. Cada índice contém documentos que compartilham a mesma estrutura e são organizados de forma otimizada para buscas rápidas.

Já o documento é um conjunto de dados, extraidos anteriormente da aplicação.

### Shards
Ele também divide os dados em shards (partições), que podem ser replicados para garantir alta disponibilidade e desempenho. As buscas e análises são realizadas por meio de consultas flexíveis em formato JSON, permitindo encontrar e processar dados em tempo real.

>Em uma abordagem distribuída com shards, é recomendado utilizar um atributo de roteamento de dados, como o `provider_id`, já que a maioria das consultas será focada em um provedor de crédito específico. O uso de múltiplos shards é recomendado quando o índice atinge cerca de 20 GB, garantindo melhor desempenho e escalabilidade.

### Kibana  

[Picture][Gráficos no kibana]
O **Kibana** é a interface visual do Elastic Stack. Ele permite explorar, visualizar e criar dashboards interativos com os dados armazenados no Elasticsearch, transformando-os em insights acessíveis e visuais.

Ele se auto-explica:

[Action][Abrir o kibana e demonstrar os gráficos do myloan]


## O mundo real - Uso comercial

[Action] - Falar um pouco sobre os usos do ES na Seventh LTDA, bem freestyle.

- Dados de portaria (entrada e saida, tempo de atendimento etc.)
- Dados de dispositivos

### Quem usa ?

- **Wikipedia**: Fornecer buscas rápidas em bilhões de artigos.
- **GitHub**: Otimizar a busca de código e repositórios.
- **Facebook**: Para melhorar a pesquisa de conteúdo e interações em tempo real.
- **The New York Times**: O **NY Times** usa Elasticsearch para indexar e buscar mais de **164 anos de artigos publicados**. [Jornalistas, leitores, acesso aos artigos...]


## Bibliografia

https://www.elastic.co/guide/en/logstash/current/introduction.html

https://www.elastic.co/guide/en/elasticsearch/reference/current/size-your-shards.html

https://www.elastic.co/blog/how-many-shards-should-i-have-in-my-elasticsearch-cluster

https://www.elastic.co/customers/github

https://www.elastic.co/elasticon/conf/2016/sf/all-the-data-thats-fit-to-find-search-at-the-new-york-times

