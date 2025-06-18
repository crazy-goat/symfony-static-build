FROM scratch
ENV APP_ENB="prod"
ENV APP_DEBUG=0
ENV APP_CACHE_DIR="cache"
COPY passwd /etc/passwd
COPY group /etc/group
COPY --chmod=777 symfony.bin /
ENV APP_RUNTIME="CrazyGoat\\WorkermanBundle\\Runtime"
CMD ["/symfony.bin", "start"]
