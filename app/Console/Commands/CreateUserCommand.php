<?php

namespace App\Console\Commands;

use Throwable;
use Illuminate\Console\Command;
use App\Actions\Fortify\CreateNewUser;
use App\Models\User;
use function Laravel\Prompts\text;
use function Laravel\Prompts\password;
use function Laravel\Prompts\confirm;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an User';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = text(
            label: 'User Full name:',
            required: true
        );

        $email = text(
            label: 'User E-mail:',
            required: true,
            validate: ['email' => 'required|email|unique:users,email']
        );

        $password = password(
            label: 'User password?',
            placeholder: 'password',
            hint: 'Minimum 8 characters.',
            validate: ['password' => 'min:8']
        );

        $confirmed = confirm(
            label: 'Do you accept the terms?',
            default: false,
            yes: 'I accept',
            no: 'I decline',
            hint: 'The terms must be accepted to continue.'
        );

        try {
            if ($confirmed === true) {

                $userCreator = new CreateNewUser();

                $user = $userCreator->create([
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'password_confirmation' => $password,
                    'terms' => $confirmed
                ]);

                $this->info("User ID:' " . $user->id . " Sucessfully created.");
            
            } else {
                
                $this->info("User not created, as he did not accept the termsß.");
            
            }
        
        } catch (Throwable $exception) {
            
            $this->warn($exception->getMessage());

        }

    }
}