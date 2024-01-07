# Build image for production
FROM bitnami/laravel:10

WORKDIR /app
COPY . ./
RUN composer install
RUN curl -fsSL https://deb.nodesource.com/setup_21.x | bash - && apt-get install -y nodejs
RUN npm install && npm run build

EXPOSE 8000
