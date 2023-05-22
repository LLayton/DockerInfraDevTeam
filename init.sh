#!/bin/bash


# Récupérer le chemin d'accès absolu du script
script_path=$(readlink -f "$0")
# Vérifier si Composer est installé
if ! command -v composer &> /dev/null; then
    echo "Composer n'est pas installé. Installation en cours..."
    # Télécharger et installer Composer
    apt install composer
    echo "Composer a été installé avec succès."
else
    echo "Composer est déjà installé."
fi

if [ -z "$(ls -A ./awsLaravel/laravel)" ]; then
    # Si le répertoire est vide, on fait un git clone
    git clone -b main https://github.com/Maquequette/back.git  ./awsLaravel/laravel
    cd ./awsLaravel/laravel
    composer install
    isExecuted=1
else
    # Si le répertoire n'est pas vide, on fait un git pull
    cd ./awsLaravel/laravel
    git pull origin main 
    composer install
    isExecuted=1

fi
if [ "$isExecuted" -eq 1 ]; then
    echo $script_dir
    docker-compose up
fi


