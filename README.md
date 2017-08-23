# ProjectBus2017

Faculdade Estácio - Cadeira Desenvolvimento de Software 

Alunos 

Adriano Cassiano
Elias Barreto
Marco Cesar

TEMA PROPOSTO 

Após a extinção da Empresa Metropolitana de Transportes Urbanos (EMTU/Recife), foi criado formalmente, no dia 08 de setembro de 2008, o Grande Recife Consórcio de Transporte, que é a primeira experiência de consórcio no setor de transporte de passageiros em todo o País. Visando dar suporte às linhas concedidas o consócio Grande Recife deseja implementar um sistema para controlar os itinerários, paradas e fluxos de suas linhas de ônibus. 
A concessão das linhas de ônibus feitas por licitação e cada linha é identificada pelo código, nome, anel a que pertence (cada anel está associado a uma tarifa) e seu itinerário, que são todas as ruas (Trechos, Logradouros, Bairros e Municípios) que a mesma passa. 

O itinerário de uma linha é uma sequencia ordenada de trechos e ruas por onde ela passa. Observe que em caso de grandes ruas (ex.: Caxangá, Agamenon Magalhães, etc.) as mesmas podem ser divididas em trechos menores para melhor definição do itinerário. Toda rua que passar por mais de um bairro será obrigatoriamente dividida em pelo menos 2 trechos, já que cada trecho só poderá pertencer a um mesmo bairro. Pontes, largos e praças podem ser considerados logradouros ou trechos de um. As paradas existem independente de serem utilizadas, ou seja, podem não estar alocada momentaneamente a nenhuma linha e podem ser de três tipos: Ponto de parada (placa indicativa no poste), Abrigo ou Terminal.

No caso de Abrigo é necessário que seja catalogado o tipo de construção (Coberta de concreto, Telhado de Alumínio, etc.) do mesmo e se for terminal é necessário que seja informado se tem ou não integração com outras linhas ou com que outros tipos de transporte, como, por exemplo, Metrô.•Cada parada será identificada por um código de identificação sequencial, nome, endereço, referência dentro do endereço (“em frente à casa 1010” ou “após a padaria A Lusitana”) e tipo de parada e de construção.•As linhas possuem paradas e estas devem ser associadas à mesma, colocando-se de forma sequencial, ou seja, dentro de cada linha tem-se parada: 1, 2, 3, 4. Observe que uma parada pode servir a mais de uma linha, mesmo que em sequencias diferente. Sequencia é a ordem física de parada de uma determinada linha.

Uma linha pode ser integrada, pelo sistema SEI ou outros convênios municipais, com outra em uma determinada parada, mas esta parada deve ser do tipo: Parada com integração.•Existem vários tipos de tarifas, divididas em anéis. Cada anel tem uma tarifa específica e deve-se guardar os valores das tarifas em relação ao tempo.•As linhas podem ser classificadas em subúrbio-cidade, inter-bairros, alimentadoras ou circulares. Todas as linhas, com exceção das circulares, possuem um ponto/parada de início e outro de retorno. As circulares possuem apenas o ponto de inicio. O ponto de início ou retorno são paradas normais que para estas linhas assumem uma situação especial.Tema proposto

Para cada linha é necessário armazenar a quantidade de ônibus alocados à mesma, bem como o horário de saída dos pontos de início/retorno de cada veículo. Porém existem linhas que possuem itinerários diferenciados por horário de saída do veículo e/ou dia da semana. Por exemplo: existem linhas que tem pontos de retorno no Cais de Santa Rita ou na Prefeitura, dependendo do horário ou dia da semana de saída do veículo. Existe ainda a necessidade de controlar itinerários temporários, ou seja, linha que mudam de itinerário durante um período determinado (ex. Carnaval, Festas ou mesmo manutenção e obras). Neste caso o sistema armazenará o itinerário padrão e o período e motivo em que terá sua rota alterada.Tema proposto

O sistema de itinerário será integrado a um sistema de geo-referência, permitindo que um usuário selecione no mapa o ponto origem e destino de sua viagem e, através dos itinerários armazenados o sistema irá sugerir as possíveis rotas, com logradouros e trechos e até mesmo paradas onde o usuário irá fazer integração ou baldeação de uma linha para outra. Esta consulta deverá levar em conta o menor custo possível.

CONTEÚDOS MINISTRADOS EM AULAS

 Aula  22/08/2017

- www.trello.com (ferramenta) 
	Gerenciamento ágil do projeto 
	Quadro Kanban

