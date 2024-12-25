FROM mysql:8.0

COPY ./my.cnf /etc/mysql/my.cnf

RUN chmod 644 /etc/mysql/my.cnf \
    && chown mysql:mysql /etc/mysql/my.cnf 