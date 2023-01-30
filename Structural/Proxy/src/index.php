<?php

namespace Funlife\Proxy;

use Funlife\Proxy\UserEager;
use Funlife\Proxy\UserLazy;

$proxied_user = new UserLazy(UserEager::class);

$proxied_user->getUser();
