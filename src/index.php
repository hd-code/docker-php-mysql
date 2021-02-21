<?php

require_once 'lib/parsedown/Parsedown.php';

require_once 'core/analytics.php';
require_once 'core/routing.php';

// -----------------------------------------------------------------------------

saveRequestData();
route();
