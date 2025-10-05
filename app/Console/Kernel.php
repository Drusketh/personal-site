<?php

protected function schedule(Schedule $schedule)
{
    $schedule->command('repo:update-stats')->twiceDaily();
}
