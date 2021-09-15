FROM reg.cic.kz/centras/php-fpm:larakup as cc-php-vendor
WORKDIR /app

COPY ./composer.json /app/composer.json
COPY ./composer.lock /app/composer.lock

RUN composer install \
    --no-dev \
    --no-autoloader \
    --no-interaction \
    --no-scripts



FROM node:14 as cc-node-vendor
WORKDIR /app

COPY ./package.json /app/package.json
COPY ./package-lock.json /app/package-lock.json

RUN npm i



FROM node:14 as cc-node-assets
WORKDIR /app

COPY --from=cc-node-vendor /app/node_modules /app/node_modules
COPY ./resources/ /app/resources
COPY ./public/ /app/public
COPY ./package-lock.json /app/
COPY ./package.json /app/
COPY ./webpack.mix.js /app/

# RUN npm run dev



FROM reg.cic.kz/centras/php-fpm:larakup as cc-build-app
WORKDIR /app

COPY --from=cc-php-vendor /app/vendor /app/vendor
COPY --from=cc-node-assets /app/public /app/public

# COPY --from=node-vendor /app/node_modules /app/node_modules
# RUN apt-get update && apt-get install -y procps
COPY ./app/ /app/app
COPY ./bootstrap/ /app/bootstrap
COPY ./config/ /app/config
COPY ./database/ /app/database
COPY ./routes/ /app/routes
# COPY ./storage/ /app/storage
COPY ./storage/ /app/storage
# COPY ./.env /app/
COPY ./artisan /app/

# Под вопросом
COPY ./composer.json /app/
COPY ./composer.lock /app/
COPY ./package.json /app/
COPY ./package-lock.json /app/

RUN composer dump-autoload
# RUN php artisan lang:js

RUN chmod 0777 storage -R
EXPOSE 9000

CMD ["php-fpm"]
