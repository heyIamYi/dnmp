FROM nginx:1.24.0

RUN apt-get update && \
    apt-get install -y nano vim curl wget && \
    rm -rf /var/lib/apt/lists/*

CMD ["nginx", "-g", "daemon off;"]