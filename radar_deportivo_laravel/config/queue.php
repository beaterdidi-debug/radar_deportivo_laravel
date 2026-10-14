<?php
return ['default'=>env('QUEUE_CONNECTION','sync'),'connections'=>['sync'=>['driver'=>'sync']],'failed'=>['driver'=>'null','database'=>env('DB_CONNECTION','sqlite'),'table'=>'failed_jobs']];
