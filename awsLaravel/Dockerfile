# Utiliser l'image de PHP 8.0 avec Apache
FROM php:8.2-apache

# Installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    git \
    unzip


# Prend l'exécutable de l'installateur 
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


# Activer les modules Apache nécessaires pour exécuter Laravel
RUN a2enmod rewrite && a2enmod headers


# Exposer le port Apache et lancer le serveur
EXPOSE 81
CMD ["php", "artisan", "serve", "--port=81", "--host=0.0.0.0"]

