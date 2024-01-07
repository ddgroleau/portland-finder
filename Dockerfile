# Build image for production
FROM bitnami/laravel:10

WORKDIR /app

COPY . .
RUN curl -fsSL https://deb.nodesource.com/setup_21.x | bash - && apt-get install -y nodejs
RUN npm install
RUN npm run build
RUN composer install --no-scripts --no-autoloader

EXPOSE 8000
