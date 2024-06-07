<?php

try {
    $webhookHandler->handle($webhook);
} catch (WebhookException $exception) {
    Logger::error($exception->getMessage());
    throw new Exception("Unable to handle webhook");
} finally {
    Logger::info("All webhooks processed..");
}



