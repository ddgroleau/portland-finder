<?php

try {
    shell_exec('docker stop portland-finder && docker rm portland-finder');
} catch (Exception) {
    echo "No existing container found.";
}

shell_exec('docker build . -t portland-finder');

passthru('docker run -p 8000:8000 -d --name portland-finder portland-finder');
