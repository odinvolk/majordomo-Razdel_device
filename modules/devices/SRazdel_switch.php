<?php

$status = $this->getProperty('status');
if ($status) {
    $this->callMethod('taken');
} else {
    $this->callMethod('shoot');
}
