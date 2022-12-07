echo "Inciando a criação das imagens"

docker build -t jardeljga/backend-projetodio:1.0 backend/.
docker build -t jardeljga/database-projetodio:1.0 database/.

echo "Iniciando Push das imagens para o dockerhub"

docker push jardeljga/backend-projetodio:1.0
docker push jardeljga/database-projetodio:1.0

