# Build Vue artifacts
FROM node:alpine AS build

WORKDIR /app
COPY . ./

RUN npm install && npm run build


# Build image for production
FROM bitnami/laravel:10 as production

WORKDIR /app
COPY . ./
COPY --from=build /app/public/build/ /app/public/build/
RUN composer install

EXPOSE 8000
