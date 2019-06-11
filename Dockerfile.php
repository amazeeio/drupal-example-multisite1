ARG CLI_IMAGE
FROM ${CLI_IMAGE} as cli

FROM amazeeiodevelopment/drupal-example-baseimage-php

COPY --from=cli /app /app
