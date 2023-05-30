<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\OperacaoController;

class Operacao extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'operacao {operacao}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $op = new OperacaoController();
        $resposta = $op->operacoes($this->argument( 'operacao'));
        dd($resposta);
    }
}
