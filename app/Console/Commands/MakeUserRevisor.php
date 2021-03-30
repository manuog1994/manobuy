<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUserRevisor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'manobuy:makeUserRevisor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Asigna a un usuario el roll de revisor';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $email = $this->ask("Introduce el email del usuario");
        $user = User::where('email', $email)->first();

        if(!$user){
            $this->error('Usuario no encontrado');
            return;
        }

        $user->is_revisor = true;

        $user->save();

        $this-> info("El usuario $user->name ya es un revisor");

    }
}
