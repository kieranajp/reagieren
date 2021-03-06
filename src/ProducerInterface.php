<?php

namespace HelloFresh\Reagieren;

interface ProducerInterface
{
    /**
     * @param  string $topic   The name of the topic / channel to send the message to
     * @param  string $payload The payload to be sent
     * @param  array  $configs Specific configurations
     * @return mixed
     */
    public function produce($topic, $payload, $configs = []);
}
