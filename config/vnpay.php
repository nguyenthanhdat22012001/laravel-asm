<?php

return [
    'startTime' =>  date("YmdHis"),
    'expire' => date('YmdHis',strtotime('+15 minutes',strtotime($startTime)))
];