<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('export:users')->weekly();
