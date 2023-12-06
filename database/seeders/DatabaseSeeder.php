<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DataTypesTableSeeder::class,
            DataRowsTableSeeder::class,
            MenusTableSeeder::class,
            MenuItemsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionsTableSeeder::class,
            PermissionRoleTableSeeder::class,
            SettingsTableSeeder::class,
            UsersTableSeeder::class,
            UserRolesTableSeeder::class,
            PacientesTableSeeder::class,
            MedicamentosTableSeeder::class,
            MaterialesTableSeeder::class,
            ServiciosTableSeeder::class,
            AuditsTableSeeder::class,
        ]);
        $this->call(DataRowsTableSeeder::class);
        $this->call(CitasTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}
