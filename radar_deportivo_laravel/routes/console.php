<?php
use Illuminate\\Support\\Facades\\Artisan;
Artisan::command('radar:info', function () {
 $this->comment('Radar Deportivo está listo.');
})->purpose('Muestra información del proyecto');
