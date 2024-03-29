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
            ServiciosTableSeeder::class,
            MedicamentosTableSeeder::class,
            MaterialesTableSeeder::class,
            AuditsTableSeeder::class,
            HorariosTableSeeder::class,
            CitasTableSeeder::class,
        ]);
        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(AuditsTableSeeder::class);
        $this->call(MaterialesTableSeeder::class);
        $this->call(MedicamentosTableSeeder::class);
        $this->call(PacientesTableSeeder::class);
        $this->call(HorariosTableSeeder::class);
        $this->call(CitasTableSeeder::class);
        $this->call(ServiciosTableSeeder::class);
    }
}
