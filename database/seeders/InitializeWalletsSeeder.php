<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InitializeWalletsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {   
        User::chunk(100, function ($users) {
            foreach ($users as $user) {
                try {
                    $wallet = $user->wallet; // Vérifiez si l'utilisateur a un portefeuille
                    if (!$wallet) {
                        $user->createWallet(); // Créer le portefeuille si nécessaire
                    }
                } catch (\Exception $e) {
                    // Gérer les erreurs, si nécessaire
                    dd($e->getMessage());
                }
            }
        });
        
    }
}
