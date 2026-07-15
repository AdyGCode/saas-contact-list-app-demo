<?php
# Static page routes: home, about, privacy, et al

$basePath = dirname(__DIR__);

include_once "{$basePath}/routes/web/static.php";

# Logged-in User Profile routes
include_once "{$basePath}/routes/web/profile.php";

# Teams Routes
include_once "{$basePath}/routes/web/teams.php";

# Administration: Users
include_once "{$basePath}/routes/admin/users.php";

# This should be empty, but may be used to hold general routes
include_once "{$basePath}/routes/web/web.php";
