<?php

namespace Nebula\Console\Commands;

use Exception;
use Nebula\Models\User;
use Illuminate\Console\Command;
use Illuminate\Contracts\Hashing\Hasher;

class CreateUserCommand extends Command
{
    protected $description = 'Creates a user on the system via the CLI.';
    protected $signature = 'p:create-user {--email=} {--username=} {--password=} {--admin=}';

    /**
     * CreateUserCommand constructor.
     */
    public function __construct(private Hasher $hasher)
    {
        parent::__construct();
    }

    /**
     * Handle command request to create a new user.
     *
     * @throws Exception
     */
    public function handle()
    {
        $admin = $this->option('admin') ?? $this->confirm('Is this user an administrator?');
        $email = $this->option('email') ?? $this->ask('What is the email for this account?');
        $name = $this->option('username') ?? $this->ask('What is the username for this account?');
        $password = $this->option('password') ?? $this->secret('What is the password for this account?');

        try {
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => $this->hasher->make($password),
                'admin' => $admin,
            ]);
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        };

        $this->table(['Field', 'Value'], [
            ['UUID', $user->uuid],
            ['Email', $user->email],
            ['Username', $user->name],
            ['Name', $user->name],
            ['Admin', $user->admin ? 'Yes' : 'No'],
        ]);
    }
}
