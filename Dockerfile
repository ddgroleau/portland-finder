# Build Vue artifacts
FROM node:alpine AS build

WORKDIR /app
COPY package.json tsconfig.json vite.config.js tailwind.config.js postcss.config.js ./
COPY /resources ./resources
COPY /public ./public

RUN npm install && npm run build


# Build image for production
FROM bitnami/laravel:10 as production

WORKDIR /app
COPY . ./
COPY --from=build /app/public/build/ /app/public/build/

EXPOSE 8000
