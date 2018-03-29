<?php

// 异常处理

\system\Error::register();
// 类的自动加载

\system\Loader::register();
// 开始处理请求

\system\App::run();
