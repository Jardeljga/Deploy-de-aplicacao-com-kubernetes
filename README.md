# Deploy-de-aplicacao-com-kubernetes
Projeto criado para atender ao desafio do bootcamp da DIO de criar um deploy do zero utilizando um cluster Kubernetes. 
Nesse projeto eu utilizei o Provider de Nuvem GCP, juntamente com o GKE (serviço de Kubernetes da Google) para criação dos nodes que hospedarão os 7 pods (6 para a aplicação e 1 para o banco de dados), utilizando balanceamento de carga e um Persistent Volume.
Como acréscimo ao projeto, foi implementado a função de “Secrets” para evitar que tanto a senha do banco de dados, quanto o nome da base de dados fiquem expostos. Assim gerando mais segurança para o projeto. 
